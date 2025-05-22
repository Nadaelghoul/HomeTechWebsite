<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use App\Models\TopProviderRequest;

class AdminApiController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Check fixed credentials
        if ($request->username === 'admin' && $request->password === 'admin2222') {
            // You can return a token or simple message for now
            return response()->json([
                'status' => 'success',
                'message' => 'Login successful'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid username or password'
        ], 401);
    }

    public function dashboard()
    {
        $serviceRequests = ServiceRequest::all();
        $topproviderrequests = TopProviderRequest::all();

        return response()->json([
            'topproviderrequests' => $topproviderrequests,
         'serviceRequests' => $serviceRequests

        ]);
    }
}