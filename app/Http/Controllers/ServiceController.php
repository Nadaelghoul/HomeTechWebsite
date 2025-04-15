<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function search(Request $request)
    {
        $query = strtolower(trim($request->input('query'))); // Convert to lowercase & trim spaces


        $services = [
            'electrical' => url('/electrical'),
            'plumbing' => url('/plumbing'),
            'airconditiong' => url('/airconditions'),
            'painting' => url('/painting'),
            'carpentry' => url('/carpentry'),
            'appliance' => url('/appliance')
        ];

       // Redirect if the service is found
       if (array_key_exists($query, $services)) {
        return redirect($services[$query]);
      }

    return redirect()->back()->with('error', 'Service not found. ');

    }
}
