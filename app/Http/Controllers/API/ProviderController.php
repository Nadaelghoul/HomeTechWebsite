<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\ServiceRequest;
use App\Models\TopProviderRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProviderController extends Controller
{
    public function showProfile(Request $request)
    {
        $user_id = $request->cookie('provider_id');
        $provider = Provider::find($user_id);


        $providerSkills = !empty($provider->skills) 
            ? (is_array($provider->skills) ? $provider->skills : json_decode($provider->skills, true)) 
            : [];

        $serviceRequests = ServiceRequest::where('status', 'pending')
            ->where('service', $provider->service)
            ->whereIn('skill', $providerSkills)
            ->get();

        $topProviderRequests = TopProviderRequest::where('status', 'pending')
            ->where('service_provider', $provider->name)
            ->get();

        $pendingRequestsCount = $serviceRequests->count() + $topProviderRequests->count();

        return response()->json([
            'provider' => $provider,
            'profile' => $provider->profile,
            'pending_requests_count' => $pendingRequestsCount,
            'service_requests' => $serviceRequests,
            'top_provider_requests' => $topProviderRequests,
        ]);
    }

    public function editProfile(Request $request)
    {
        $user_id = $request->cookie('provider_id');
        $provider = Provider::find($user_id);

        $serviceSkills = [
            'Air Conditioning Service' => [
                'Air conditioning cleaning & summer maintenance',
                'Air conditioning inspection',
                'Charging Freon air conditioning',
                'Dismantling and installing Air conditioning'
            ],
            'Carpentry Service' => [
                'Door Installation and Repair',
                'Window Framing and Repair',
                'Bedroom Furniture Assembly',
                'Table Crafting and Restoration'
            ],
            'Electrical Work Service' => [
                'Wiring and Cabling Services',
                'Installing and Maintaining Electrical Panels',
                'Installing and Maintaining Lighting Systems',
                'Installing and Maintaining Alarm and Home Security Systems'
            ],
            'Appliance Service' => [
                'Washing Machine Repair',
                'Refrigerator Repair',
                'Water Heater Repair',
                'Oven Repair'
            ],
            'Painting Service' => [
                'Interior Wall Painting',
                'Exterior House Painting',
                'Cabinet Refinishing',
                'Decorative Painting'
            ],
            'Plumbing Service' => [
                'Fix Leak',
                'Unclog The Drain',
                'Install A New Sink',
                'Replace A Faucet'
            ],
        ];

        $selectedService = $provider->service;
        $selectedSkills = is_string($provider->skills)
            ? json_decode($provider->skills, true) ?? []
            : (is_array($provider->skills) ? $provider->skills : []);

        $availableSkills = $serviceSkills[$selectedService] ?? [];

        $serviceRequests = ServiceRequest::where('status', 'pending')
            ->where('service', $provider->service)
            ->whereIn('skill', $selectedSkills)
            ->get();

        $topRequests = TopProviderRequest::where('status', 'pending')
            ->where('service_provider', $provider->name)
            ->get();

        $pendingRequestsCount = $serviceRequests->count() + $topRequests->count();

        return response()->json([
            'provider' => $provider,
            'profile' => $provider->profile,
            'available_skills' => $availableSkills,
            'selected_skills' => $selectedSkills,
            'pending_requests_count' => $pendingRequestsCount,
            'service_requests' => $serviceRequests,
            'top_provider_requests' => $topRequests,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user_id = $request->cookie('provider_id');
        $provider = Provider::find($user_id);
        $profile = $provider->profile;

        $request->validate([
            'name' => ['nullable', 'string', 'max:255', 'regex:/^[\p{L}\s]+$/u','regex:/^\s*\S+\s+\S+\s+\S+(\s+\S+)*\s*$/'],
            'email' => 'nullable|string|max:255|email|unique:providers,email,' . $provider->id,
            'phone' => 'nullable|digits_between:8,15',
            'area' => 'nullable|in:Al Manakh District,Al Zohour District,Al-talatini District,South District,East Port Said District,Al-dowahi District,West District',
            'service' => 'nullable|in:Air Conditioning Service,Carpentry Service,Electrical Work Service,Appliance Service,Painting Service,Plumbing Service',
            'skills' => 'nullable|array',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $updates = [];

        foreach (['name', 'email', 'phone', 'area', 'service', 'skills'] as $field) {
            if ($request->filled($field)) {
                $value = $request->input($field);
                $updates[$field] = ($field === 'skills') ? json_encode($value) : $value;
            }
        }

        if (!empty($updates)) {
            DB::table('providers')->where('id', $provider->id)->update($updates);
            DB::table('profiles')->where('provider_id', $provider->id)->update($updates);
        }

        if ($request->hasFile('photo')) {
            if ($profile->photo && $profile->photo !== 'images/profiledefault.jpeg') {
                Storage::delete('public/' . $profile->photo);
            }

            $photoName = $request->file('photo')->getClientOriginalName();
            
            $photoPath = $request->file('photo')->storeAs('profile_photos', $photoName, 'public');
            
            $fullPhotoPath = 'storage/' . $photoPath;
            
            DB::table('profiles')->where('provider_id', $provider->id)->update(['photo' => $fullPhotoPath]);
        }


        return response()->json([
            'message' => 'Profile updated successfully',
            'provider' => Provider::with('profile')->find($provider->id),
        ]);
    }


    public function updatePhoto(Request $request, $id)
{
    $provider = Provider::findOrFail($id);
    $profile = $provider->profile;

    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    // Delete old photo if exists (except default.png)
    if ($profile->photo && $profile->photo !== 'images/profile1.jpeg') {
        Storage::delete('public/' . $profile->photo);
    }

    // Store new photo in public/images/profile_photos
    $photoPath = $request->file('photo')->store('images/profile_photos', 'public');
    
    // Generate the full URL for the stored photo
    $photoUrl = asset('storage/' . $photoPath); // Create the full URL to the photo

    // Update the profile photo URL
    $profile->update(['photo' => $photoUrl]);

    return response()->json([
        'message' => 'Profile photo updated successfully.',
        'photo' => $photoUrl, // Return the full URL of the photo
        'provider' => Provider::with('profile')->find($provider->id),
        'profile' => $profile,
    ]);
}


public function dashboardApi(Request $request)
{
    $user_id = $request->cookie('provider_id');
    $provider = Provider::find($user_id);

    if (!$provider) {
        return response()->json([
            'status' => false,
            'message' => 'You must log in first.'
        ], 401);
    }

    // Decode skills
    $providerSkills = !empty($provider->skills)
        ? (is_array($provider->skills) ? $provider->skills : json_decode($provider->skills, true))
        : [];

    // Get matching service requests
    $serviceRequests = ServiceRequest::where('service', $provider->service)
        ->whereIn('skill', $providerSkills)
        ->get();

    // Get top provider requests
    $topProviderRequests = TopProviderRequest::where('service_provider', $provider->name)->get();

    return response()->json([
        'status' => true,
        'message' => 'Dashboard data retrieved successfully.',
        'data' => [
            'provider' => $provider,
            'service_requests' => $serviceRequests,
            'top_provider_requests' => $topProviderRequests,
        ]
    ]);
}




}
