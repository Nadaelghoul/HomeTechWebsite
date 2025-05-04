<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function search(Request $request)
    {
        $query = strtolower(trim($request->input('query'))); // Normalize input

        // قائمة الخدمات الرئيسية مع خدماتها الفرعية
        $services = [
            'electrical' => [
                'url' => url('/electrical'),
                'keywords' => [
                    'electrical',
                    'wiring', 'cabling',
                    'wiring and cabling services',
                    'electrical panel installation',
                    'installing and maintaining electrical panels',
                    'lighting systems installation',
                    'lighting systems',
                    'installing and maintaining lighting systems',
                    'alarm and home security systems',
                    'installing and maintaining alarm and home security systems',
                    'electrician'
                ]
            ],
            'plumbing' => [
                'url' =>url('/plumbing'),
                'keywords' => [
                    'plumbing', 'leak', 'pipe', 'water',
                    'fix leak', 'repair leak', 'leak repair',
                    'unclog drain', 'unclog the drain', 'drain cleaning',
                    'install sink', 'install a new sink', 'sink installation',
                    'replace faucet', 'faucet replacement'
                ]
            ],
            'airconditiong' => [
                'url' => url('/airconditions'),
                'keywords' => [
                    'airconditiong', 'air conditioning',
                    'air conditioning cleaning', 'summer maintenance',
                    'air conditioning cleaning & summer maintenance',
                    'charging freon', 'freon charging', 'freon fill',
                    'charging freon air conditioning',
                    'air conditioning inspection', 'ac inspection',
                    'dismantling and installing air conditioning',
                    'ac dismantle', 'ac install'
                ]
            ],
            'painting' => [
                'url' => url('/painting'),
                'keywords' => [
                    'painting', 'paint',
                    'interior wall painting',
                    'exterior house painting',
                    'cabinet refinishing',
                    'decorative painting',
                    'wall painting',
                    'faux finish', 'murals', 'accent wall'
                ]
            ],
            'carpentry' => [
                'url' => url('/carpentry'),
                'keywords' => [
                    'carpentry', 'woodwork',
                    'door installation', 'door repair',
                    'window framing', 'window repair',
                    'bedroom furniture', 'furniture assembly',
                    'custom table', 'table crafting', 'table restoration'
                ]
            ],
            'appliance' => [
                'url' => url('/appliance'),
                'keywords' => [
                    'washing machine repair', 'refrigerator repair', 'water heater repair', 'oven repair'
                ]
            ]
        ];

        // البحث داخل الكلمات المفتاحية
        foreach ($services as $service) {
            foreach ($service['keywords'] as $keyword) {
                if (str_contains($query, strtolower($keyword))) {
                    return redirect($service['url']);
                }
            }
        }

        // في حالة عدم العثور على أي خدمة
        return redirect()->back()->with('error', 'Service not found.');
    }
}
