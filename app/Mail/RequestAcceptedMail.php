<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestAcceptedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $serviceRequest;
    public $provider;
    public $providerProfile;

    public function __construct($serviceRequest, $provider, $providerProfile)
    {
        $this->serviceRequest = $serviceRequest;
        $this->provider = $provider;
        $this->providerProfile = $providerProfile;
    }

    public function build()
    {

        // Fix path formatting and generate full URL
        $photoPath = str_replace('\\', '/', $this->providerProfile->photo);
        $fullPhotoUrl = url($photoPath);

        return $this->subject('Your Service Request Has Been Accepted')
            ->view('emails.request_accepted')
            ->with([
                'requestKey' => $this->serviceRequest->request_key,
                'service' => $this->serviceRequest->service,
                'skill' => $this->serviceRequest->skill,
                'providerName' => $this->provider->name,
                'providerPhone' => $this->provider->phone,
                'providerPhoto' => $fullPhotoUrl, // Ensure full URL for Gmail
            ]);
    }
}
