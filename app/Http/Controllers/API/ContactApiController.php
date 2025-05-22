<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactApiController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'regex:/^[\pL\s]+$/u', 'max:255'],
            'last_name' => ['required', 'string', 'regex:/^[\pL\s]+$/u', 'max:255'],
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($data);

        Mail::to(['admin1@gmail.com', 'admin2@gmail.com',])->send(new ContactMail($data));

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully.',
        ], 200);
    }
}