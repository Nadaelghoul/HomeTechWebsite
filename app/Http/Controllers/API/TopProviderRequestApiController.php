<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\TopProviderRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestAcceptedMail;
use App\Mail\TopProviderRequestRefused;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;
use App\Models\ServiceRequest;
use Illuminate\Support\Arr;



class TopProviderRequestApiController extends Controller
{
    public function create(Request $request)
    {
        $data = [
            'service' => $request->query('service', 'Not specified'),
            'title' => $request->query('title', 'Not specified'),
            'price' => $request->query('price', 'Not specified'),
            'service_provider' => $request->query('service_provider', 'Default Provider'),
        ];

        return response()->json([
            'message' => 'Service request data fetched successfully.',
            'data' => $data
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','string','max:255','regex:/^[\p{L}\s]+$/u'],
            'email' => ['required','string','email','max:255' ],
            'mobile' => ['required', 'regex:/^01[0-9]{9}$/'],
            'area' => 'required|in:Al Manakh District,Al Zohour District,Al-talatini District,South District,East Port Said District,Al-dowahi District,West District',
            'Problem_Address'=>'required|string|max:255',
            'execution_day' => 'required|date|after_or_equal:today',
            'requirements' => ['nullable', 'regex:/^[\pL\s]+$/u', 'max:255'],
            'service'=>'required|string',
            'skill'=>'required|string',
            'price'=>'required|string',
            'service_provider'=>'required|string',
        ], [
            'execution_day.after_or_equal' => 'Calendar day must be today or later.',
        ]);

        $validatedData['request_key'] = strtoupper(substr(md5(uniqid()), 0, 8));
        $validatedData['status'] = 'pending';

        $provider = Provider::where('name', $validatedData['service_provider'])->first();

        if (!$provider) {
            return response()->json(['error' => ' Service provider not found.'], 404);
        }

        $validatedData['provider_id'] = $provider->id;

        $topproviderrequest = TopProviderRequest::create($validatedData);
        if (!$topproviderrequest) {
            return response()->json(['error' => ' Failed to create service request.
            '], 500);
        }

        $sender_id = $request->cookie('provider_id');
        Notification::create([
            'sender_id' => $sender_id, 
            'receiver_id' => $provider->id, 
            'message' => 'New service request created by ' . $topproviderrequest->name,
        ]);

        return response()->json([
            'message' => 'Service request created successfully.',
            'data' => $topproviderrequest
        ], 201);
    }

    public function acceptRequest($requestKey, Request $request)
    {
        $topproviderrequest = TopProviderRequest::where('request_key', $requestKey)
            ->where('status', 'pending')
            ->first();

       if (!$topproviderrequest) {
        return response()->json(['error' => 'Request not found or already dealt with'], 404);
    }

        $user_id = $request->cookie('provider_id');
        $provider = Provider::find($user_id);
        $providerProfile = $provider->profile;

        $topproviderrequest->update([
            'status' => 'accepted',
        ]);

        Mail::to($topproviderrequest->email)->send(
            new RequestAcceptedMail($topproviderrequest, $provider, $providerProfile)
        );

        return response()->json(['message' => 'Request accepted', 
            'user'=> $providerProfile,
        ]);
    }

    public function refuse($requestKey, Request $request)
    {
        $topproviderrequest = TopProviderRequest::where('request_key', $requestKey)
            ->where('status', 'pending')
            ->first();

        if (!$topproviderrequest) {
            return response()->json(['error' => ' Request not found or already dealt with
            '], 404);
        }

        $user_id = $request->cookie('provider_id');
        $provider = Provider::find($user_id);
        $providerProfile = $provider->profile;

        $topproviderrequest->update([
            'status' => 'refuced',
        ]);

        Mail::to($topproviderrequest->email)->send(
            new TopProviderRequestRefused($topproviderrequest, $provider, $providerProfile)
        );

        return response()->json(['message' => ' Request refused successfully. 
        ',
            'user'=> $providerProfile,
        ]);
    }

    public function getNotification(Request $request)
    {
        $user_id = $request->cookie('provider_id');
        
        $notifications = Notification::where('receiver_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();
        if ($notifications->isEmpty()) {
            return response()->json(['message' => 'No notifications found.']);
        }
        return response()->json([
            'message' => 'Get notifications successfully.',
            'notifications' => $notifications,
        ]);
    }

    public function makeNotificationViewed(Request $request)
    {
        $user_id = $request->cookie('provider_id');
        $notificationsId = Arr::wrap($request->input('notification_id'));

        if (empty($notificationsId)) {
            return response()->json(['message' => 'No notification ID provided.'], 400);
        }

        foreach ($notificationsId as $notificationId) {
            $notification = Notification::where('receiver_id', $user_id)
                ->where('id', $notificationId)
                ->first();
            if ($notification) {
                $notification->update(['is_read' => true]);
            }
        }

        return response()->json(['message' => 'Notifications marked as viewed.']);
    }
}
