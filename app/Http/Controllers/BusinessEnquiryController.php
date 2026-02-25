<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessEnquiry;
use Illuminate\Support\Facades\Mail;
use App\Mail\BusinessEnquiryMail;

class BusinessEnquiryController extends Controller
{
    public function store(Request $request)
    {
        // 1️⃣ Validate Required Fields
        $validated = $request->validate([
            'website_plan'      => 'required|string',
            'business_category' => 'required|string',
            'brand_name'        => 'required|string',
            'contact_number'    => 'required|string',
            'email'             => 'nullable|email',
            'logo'              => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'photos.*'          => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // 2️⃣ Upload Logo
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // 3️⃣ Upload Multiple Photos
        if ($request->hasFile('photos')) {
            $photos = [];

            foreach ($request->file('photos') as $photo) {
                $photos[] = $photo->store('photos', 'public');
            }

            $validated['photos'] = $photos; // ✅ NO json_encode
        }

        // 4️⃣ Store Pages as Array (NO json_encode)
        $validated['pages'] = $request->pages ?? [];

        // 5️⃣ Add Optional Fields Safely
        $validated['facebook_link']  = $request->facebook_link ?? null;
        $validated['instagram_link'] = $request->instagram_link ?? null;
        $validated['gmb_link']       = $request->gmb_link ?? null;
        $validated['address']        = $request->address ?? null;
        $validated['about_business'] = $request->about_business ?? null;
        $validated['about_products'] = $request->about_products ?? null;
        $validated['highlights']     = $request->highlights ?? null;
        $validated['why_choose_us']  = $request->why_choose_us ?? null;
        $validated['testimonials']   = $request->testimonials ?? null;
        $validated['mission']        = $request->mission ?? null;
        $validated['vision']         = $request->vision ?? null;
        $validated['our_strengths']  = $request->our_strengths ?? null;

        // 6️⃣ Save to Database
        $enquiry = BusinessEnquiry::create($validated);

        // 7️⃣ Send Mail (Safe Try-Catch)
        try {
            Mail::to(env('ADMIN_EMAIL'))
                ->send(new BusinessEnquiryMail($enquiry));
        } catch (\Exception $e) {
            \Log::error('Mail Error: ' . $e->getMessage());
        }

        // 8️⃣ Redirect Back
        return redirect()
            ->route('home')
            ->with('success', 'Enquiry submitted successfully!');
    }
}