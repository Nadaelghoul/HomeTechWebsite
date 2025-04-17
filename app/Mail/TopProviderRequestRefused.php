<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TopProviderRequestRefused extends Mailable
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

        return $this->subject('Your Service Request Has Been Refuced')
            ->view('emails.top_provider_refused')
            ->with([
                'requestKey' => $this->topproviderrequest->request_key,
                'service' => $this->topproviderrequest->service,
                'skill' => $this->topproviderrequest->skill,
                'providerName' => $this->provider->name,
            ]);
    }
}
