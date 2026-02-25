<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessEnquiry;

class BusinessEnquiryController extends Controller
{
    public function store(Request $request)
    {
        // Validate Required Fields
        $request->validate([
            'website_plan' => 'required|string',
            'business_category' => 'required|string',
            'brand_name' => 'required|string',
            'contact_number' => 'required|string',
            'email' => 'nullable|email',
            'logo' => 'nullable|image',
            'photos.*' => 'nullable|image',
        ]);

        $data = $request->all();

        // Upload Logo
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Upload Multiple Photos
        if ($request->hasFile('photos')) {
            $photos = [];
            foreach ($request->file('photos') as $photo) {
                $photos[] = $photo->store('photos', 'public');
            }
            $data['photos'] = $photos;
        }

        // Save pages as array
        $data['pages'] = $request->pages ?? [];

        // Create Record
        BusinessEnquiry::create([
            'website_plan' => $data['website_plan'],
            'business_category' => $data['business_category'],
            'brand_name' => $data['brand_name'],
            'contact_number' => $data['contact_number'],
            'email' => $data['email'] ?? null,
            'facebook_link' => $data['facebook_link'] ?? null,
            'instagram_link' => $data['instagram_link'] ?? null,
            'gmb_link' => $data['gmb_link'] ?? null,
            'address' => $data['address'] ?? null,
            'logo' => $data['logo'] ?? null,
            'photos' => $data['photos'] ?? null,
            'pages' => $data['pages'],
            'about_business' => $data['about_business'] ?? null,
            'about_products' => $data['about_products'] ?? null,
            'highlights' => $data['highlights'] ?? null,
            'why_choose_us' => $data['why_choose_us'] ?? null,
            'testimonials' => $data['testimonials'] ?? null,
            'mission' => $data['mission'] ?? null,
            'vision' => $data['vision'] ?? null,
            'our_strengths' => $data['our_strengths'] ?? null,
        ]);

        return redirect()->route('home')
                         ->with('success', 'Enquiry submitted successfully!');
    }
}