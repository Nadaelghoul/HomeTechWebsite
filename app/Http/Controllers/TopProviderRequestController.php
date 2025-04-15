<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use App\Models\TopProviderRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestAcceptedMail;
use App\Mail\RequestRefucedMail;

class TopProviderRequestController extends Controller
{
    public function create(Request $request)
    {
        $serviceProvider = $request->query('service_provider', 'Default Provider');
        return view('topproviderrequest', compact('serviceProvider'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','string','max:255','regex:/^[\p{L}\s]+$/u'],
            'email' => ['required','string','email','max:255' ],
            'mobile' => 'required|digits_between:8,15',
            'area' => 'required|in:Al Manakh District,Al Zohour District,Al-talatini District,South District,East Port Said District,Al-dowahi District,West District',
            'Problem_Address'=>'required|string|max:255',
            'execution_day' => 'required|date|after_or_equal:today',
            'requirements'=>'nullable|string|max:255',
            'service'=>'string',
            'skill'=>'string',
            'price'=>'string',
            'service_provider'=>'string',
            'request_key'=>'string',
            'status'=>'in:pending, accepted, expired,refuced',
        ]);
        $validatedData['request_key'] = strtoupper(substr(md5(uniqid()), 0, 8));
        $provider = Provider::where('name', $validatedData['service_provider'])->first();
        $validatedData['provider_id'] = $provider->id; // Assign provider_id
       $topproviderrequest= TopProviderRequest::create($validatedData);

         // Get provider
         $providers = Provider::where('name', $topproviderrequest->service_provider)->get();

        return back()->with('success', 'your request sent successfully!');
    }

    public function acceptRequest($requestKey)
    {
    $topproviderrequest = TopProviderRequest::where('request_key', $requestKey)
        ->where('status', 'pending') // Ensures only unaccepted requests can be accepted
        ->firstOrFail();

    $provider = auth('provider')->user();
    $providerProfile = $provider->profile;

    // Assign request to the provider
    $topproviderrequest->update([
        'status' => 'accepted' // Updating status to accepted
    ]);

      // Send email notification to the user
    Mail::to($topproviderrequest->email)->send(new RequestAcceptedMail($topproviderrequest, $provider, $providerProfile));

    return redirect()->back()->with('success', 'You have accepted the request.');
}


public function refuceRequest($requestKey)
    {
    $topproviderrequest = TopProviderRequest::where('request_key', $requestKey)
        ->where('status', 'pending') // Ensures only unaccepted requests can be accepted
        ->firstOrFail();

    $provider = auth('provider')->user();
    $providerProfile = $provider->profile;

    // Assign request to the provider
    $topproviderrequest->update([
        'status' => 'refuced' // Updating status to accepted
    ]);

      // Send email notification to the user
    Mail::to($topproviderrequest->email)->send(new RequestRefucedMail($topproviderrequest, $provider, $providerProfile));

    return redirect()->back()->with('success', 'You have refuced the request.');
}







}

