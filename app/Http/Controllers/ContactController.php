<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {

        $data= $request->validate([
            'first_name' => ['required','string','regex:/^[\pL\s]+$/u','max:255'],    // Allows letters and spaces only
            'last_name' => ['required','string','regex:/^[\pL\s]+$/u','max:255'],
            'email' => 'required|string|email|max:255',
            'subject'=>'required|string|max:255',
            'message' => 'required|string',
        ]);


        Contact::create([
            'first_name' => $request->first_name,
            'last_name'=> $request->last_name,
            'email' => $request->email,
            'subject'=>$request->subject,
            'message' => $request->message,
        ]);

        Mail::to(['admin1@gmail.com', 'admin2@gmail.com'])->send(new ContactMail($data));


        return back()->with('success', 'your message has been sent successfully!');


    }
}
