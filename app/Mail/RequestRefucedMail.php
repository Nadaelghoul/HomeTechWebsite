<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestRefucedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $topproviderrequest;
    public $provider;
    public $providerProfile;

    public function __construct($topproviderrequest, $provider, $providerProfile)
    {
        $this->topproviderrequest = $topproviderrequest;
        $this->provider = $provider;
        $this->providerProfile = $providerProfile;
    }

    public function build()
    {

        // Fix path formatting and generate full URL
        $photoPath = str_replace('\\', '/', $this->providerProfile->photo);
        $fullPhotoUrl = url($photoPath);

        return $this->subject('Your Service Request Has Been Refuced')
            ->view('emails.request_refuced')
            ->with([
                'requestKey' => $this->topproviderrequest->request_key,
                'service' => $this->topproviderrequest->service,
                'skill' => $this->topproviderrequest->skill,
                'providerName' => $this->provider->name,
                'providerPhone' => $this->provider->phone,
                'providerPhoto' => $fullPhotoUrl, // Ensure full URL for Gmail
            ]);
    }
}
