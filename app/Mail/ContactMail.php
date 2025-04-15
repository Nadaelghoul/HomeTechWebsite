<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
                    ->to(['smytm8331@gmail.com', 'na9803436@gmail.com'])
                    ->subject('New Contact Form Message')
                    ->view('emails.contact')
                    ->with('data', $this->data);
    }
}
