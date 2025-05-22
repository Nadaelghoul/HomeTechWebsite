<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Provider;
use App\Mail\RequestAcceptedMail;
use Illuminate\Support\Facades\Mail;


class ServiceRequestApiController extends Controller
{
    // Get all requests
    public function index()
    {
        return response()->json(ServiceRequest::with('acceptedProvider')->get(), 200);
    }

    // Get single request
    public function show($id)
    {
        $request = ServiceRequest::with('acceptedProvider')->find($id);

        if (!$request) {
            return response()->json(['message' => 'Service request not found'], 404);
        }

        return response()->json($request, 200);
    }

    // Create new request
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required','string','max:255','regex:/^[\p{L}\s]+$/u'],
            'email' => ['required','string','email','max:255'],
            'mobile' => ['required', 'regex:/^01[0-9]{9}$/'],
            'area' => 'required|in:Al Manakh District,Al Zohour District,Al-talatini District,South District,East Port Said District,Al-dowahi District,West District',
            'address' => 'required|string|max:255',
            'execution_day' => 'required|date|after_or_equal:today',
            'requirements' => ['nullable', 'regex:/^[\pL\s]+$/u', 'max:255'],
            'service' => 'required|string',
            'skill' => 'required|string',
            'price' => 'required|string',
        ]);

        $validated['request_key'] = strtoupper(Str::random(8));
        $validated['status'] = 'pending';
        $validated['accepted_provider_id'] = null;

        $serviceRequest = ServiceRequest::create($validated);

        return response()->json([
            'message' => 'Service request created successfully.',
            'data' => $serviceRequest
        ], 201);
    }

    public function acceptRequest($requestKey, Request $request)
    {
        $serviceRequest = ServiceRequest::where('request_key', $requestKey)
            ->whereNull('accepted_provider_id')
            ->firstOrFail();

        $user_id = $request->cookie('provider_id');

        $provider = Provider::find($user_id);
        $providerProfile = $provider->profile;

        // Assign request to the provider
        $serviceRequest->update([
            'accepted_provider_id' => $provider->id,
            'status' => 'accepted' // Updating status to accepted
        ]);

        // Send email notification to the user
        Mail::to($serviceRequest->email)->send(new RequestAcceptedMail($serviceRequest, $provider, $providerProfile));

        return response()->json([
            'message' => 'Request accepted successfully.',
            'user' => $providerProfile,
            'request' => $serviceRequest
        ]);
    }
}






