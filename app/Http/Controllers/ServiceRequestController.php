<?php
namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Mail\RequestAcceptedMail;
use App\Mail\NoResponseMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\CheckNoResponseJob;
use Illuminate\Support\Carbon;

class ServiceRequestController extends Controller
{
    public function create(Request $request)
    {

        return view('servicerequest');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','string','max:255','regex:/^[\p{L}\s]+$/u'],
            'email' => ['required','string','email','max:255' ],
            'mobile' => ['required', 'regex:/^01[0-9]{9}$/'],
            'area' => 'required|in:Al Manakh District,Al Zohour District,Al-talatini District,South District,East Port Said District,Al-dowahi District,West District',
            'address' => 'required|string|max:255',
            'execution_day' => 'required|date|after_or_equal:today',
            'requirements' => ['nullable', 'regex:/^[\pL\s]+$/u', 'max:255'],
            'request_key'=>'string',
            'status'=>'in:pending, accepted, expired',
            'accepted_provider_id'=>'nullable',
            'service'=>'string',
            'skill'=>'string',
            'price'=>'string',

        ],[
            'execution_day.after_or_equal' => 'You cannot select a date before today.',
        ]);
          // Generate a unique request key (8-character random string)
        $validatedData['request_key'] = strtoupper(substr(md5(uniqid()), 0, 8));

        $serviceRequest = ServiceRequest::create($validatedData);

        // Get providers who match the service & skills
        $providers = Provider::where('service', $serviceRequest->service) // Service must match
           ->whereJsonContains('skills', $request->skill)// Skill should be in provider's skills
           ->get();


        return back()->with('success', 'your request has been sent successfully!');
    }

    public function acceptRequest($requestKey)
    {
    $serviceRequest = ServiceRequest::where('request_key', $requestKey)
        ->whereNull('accepted_provider_id') // Ensures only unaccepted requests can be accepted
        ->firstOrFail();

    $provider = auth('provider')->user();
    $providerProfile = $provider->profile;

    // Assign request to the provider
    $serviceRequest->update([
        'accepted_provider_id' => $provider->id,
        'status' => 'accepted' // Updating status to accepted
    ]);

      // Send email notification to the user
    Mail::to($serviceRequest->email)->send(new RequestAcceptedMail($serviceRequest, $provider, $providerProfile));

    return redirect()->back()->with('success', 'You have accepted the request.');
}

}
