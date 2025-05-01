<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\Profile;
use App\Models\ServiceRequest;
use App\Models\TopProviderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProviderController extends Controller
{
    public function showRegisterForm(){
        return view('providerauth');
    }


    public function register(Request $request) {
        // Step 1: Manually validate so we can control the redirect
        $validator = Validator::make($request->all(), [
            'name' => ['required','string','max:255','regex:/^[\p{L}\s]+$/u','regex:/^\s*\S+\s+\S+\s+\S+(\s+\S+)*\s*$/'],
            'email' => 'required|string|max:255|email|unique:providers,email',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|digits_between:8,15',
            'area' => 'required|in:Al Manakh District,Al Zohour District,Al-talatini District,South District,East Port Said District,Al-dowahi District,West District',
            'service' => 'required|in:Air Conditioning Service,Carpentry Service,Electrical Work Service,Appliance Service,Painting Service,Plumbing Service',
            'skills' => 'nullable|array',
        ], [
            'name.regex' => 'name must be your first, middle and last name.',
        ]);

        // Check validation
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('show_register', true);
        }

        // Create provider
        $provider = Provider::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'area' => $request->area,
            'service' => $request->service,
            'skills' => json_encode($request->skills),
        ]);

        // Create profile
        $profile = Profile::create([
            'provider_id' => $provider->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'area' => $request->area,
            'service' => $request->service,
            'skills' => json_encode($request->skills),
            'photo' => 'images/profile1.jpeg',
        ]);

        // Login and redirect
        Auth::guard('provider')->login($provider);
        return redirect()->route('provider.profile', ['id' => $provider->id]);
    }



    public function updatePhoto(Request $request, $id) {
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
        $photoPath = $request->file('photo')->move('images/profile_photos', $request->file('photo')->hashName());
        $profile->update(['photo' => $photoPath]);

        return back()->with('success', 'Profile photo updated successfully.');
    }

    public function showProfile($id) {
        $provider = Provider::with('profile')->findOrFail($id);
        $getprovider=auth('provider')->user();

        // Fetch service requests for the provider based on their service and skills
      $providerSkills = !empty($getprovider->skills) ? (is_array($getprovider->skills) ? $getprovider->skills : json_decode($getprovider->skills, true)) : [];
      $serviceRequests = ServiceRequest::where('status', 'pending')
     ->where('service', $getprovider->service) // Match service
     ->whereIn('skill', $providerSkills) // Match skills (if stored as JSON)
     ->get();

     $topproviderrequests = TopProviderRequest::where('status', 'pending')
     ->where('service_provider', $getprovider->name)
     ->get();

   // Pass pending requests count
   $pendingRequestsCount = $serviceRequests->where('status', 'pending')->count() +
                          $topproviderrequests->where('status', 'pending')->count();


        return view('profile', compact('provider', 'getprovider','pendingRequestsCount'));
    }
    public function editprofile($id)
  {
    $provider = Provider::with('profile')->findOrFail($id);
    $getprovider=auth('provider')->user();

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

    // Get provider's service and skills
    $selectedService = $provider->service;
    $selectedSkills = is_string($provider->skills) ? json_decode($provider->skills, true) ?? [] : [];

    // Get skills related to the selected service
    $availableSkills = $serviceSkills[$selectedService] ?? [];

    $providerSkills = !empty($getprovider->skills) ? (is_array($getprovider->skills) ? $getprovider->skills : json_decode($getprovider->skills, true)) : [];
    $serviceRequests = ServiceRequest::where('status', 'pending')
   ->where('service', $getprovider->service) // Match service
   ->whereIn('skill', $providerSkills) // Match skills (if stored as JSON)
   ->get();


   $topproviderrequests = TopProviderRequest::where('status', 'pending')
   ->where('service_provider', $getprovider->name)
   ->get();

 // Pass pending requests count
 $pendingRequestsCount = $serviceRequests->where('status', 'pending')->count() +
                        $topproviderrequests->where('status', 'pending')->count();


    return view('edit_profile', compact('provider' ,'availableSkills', 'selectedSkills', 'getprovider','pendingRequestsCount'));
}
public function updateprofile(Request $request, $id)
{
    $provider = Provider::findOrFail($id);
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
        if ($field === 'skills') {
            $updates[$field] = $request->input($field);
        } else {
            $updates[$field] = $request->input($field);
        }
    }
}



    // Update provider
    if (!empty($updates)) {
        DB::table('providers')->where('id', $provider->id)->update($updates);
        DB::table('profiles')->where('provider_id', $provider->id)->update($updates);
    }

    // Update profile photo if uploaded
    if ($request->hasFile('photo')) {
        if ($profile->photo && $profile->photo !== 'images/profiledefault.jpeg') {
            Storage::delete('public/' . $profile->photo);
        }
        $photoPath = $request->file('photo')->store('profile_photos', 'public');
        DB::table('profiles')->where('provider_id', $provider->id)->update(['photo' => $photoPath]);
    }

    return redirect()->route('provider.profile', ['id' => $provider->id]);
}
    public function showLoginForm(){
        return view('providerauth');}

        public function login(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::guard('provider')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $provider = Auth::guard('provider')->user();
                return redirect()->route('provider.profile', ['id' => $provider->id]);
            }

            return back()->withErrors(['Invalid email or password.']);
        }

        public function logout(Request $request)
        {
            // Check if provider is authenticated
            $provider = Auth::guard('provider')->user();

              // Delete profile first
            DB::delete('DELETE FROM profiles WHERE provider_id = ?', [$provider->id]);

           // Delete provider
            DB::delete('DELETE FROM providers WHERE id = ?', [$provider->id]);

            // Logout the provider
            Auth::guard('provider')->logout();

            // Redirect to login page
            return redirect()->route('login.submit');
        }




public function dashboard(Request $request){
    $providerId = $request->query('provider_id');
    $provider = auth('provider')->user();

    // Check if the provider is null (not logged in)
    if (!$provider) {
        return redirect()->route('provider.login')->with('error', 'You must log in first.');
    }

    // Decode JSON skills from provider table (handle empty case)
    $providerSkills = !empty($provider->skills) ? (is_array($provider->skills) ? $provider->skills : json_decode($provider->skills, true)) : [];

    // Get service requests that match the provider's service and at least one skill
    $serviceRequests = ServiceRequest::where('service', $provider->service)
        ->whereIn('skill', $providerSkills)
        ->get();

        $topproviderrequests = TopProviderRequest::where('service_provider', $provider->name) ->get();



    return view('dashboard',compact('serviceRequests','provider','topproviderrequests'));

}

}
