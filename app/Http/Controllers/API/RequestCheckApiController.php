<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\NoResponseMail;

class RequestCheckApiController extends Controller
{
    public function checkPendingRequests()
    {
        $tenMinutesAgo = Carbon::now()->subMinutes(10);

        $pendingRequests = ServiceRequest::where('status', 'pending')
            ->where('created_at', '<=', $tenMinutesAgo)
            ->get();

        foreach ($pendingRequests as $request) {
            if ($request->status === 'pending') {
                Mail::to($request->email)->send(new NoResponseMail($request));
                $request->update(['status' => 'expired']);
            }
        }

        return response()->json(['message' => 'Checked pending requests']);
    }
}