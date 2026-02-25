<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessEnquiry extends Model
{
    protected $fillable = [
        'website_plan',
        'business_category',
        'brand_name',
        'contact_number',
        'email',
        'facebook_link',
        'instagram_link',
        'gmb_link',
        'address',
        'logo',
        'photos',
        'pages',
        'about_business',
        'about_products',
        'highlights',
        'why_choose_us',
        'testimonials',
        'mission',
        'vision',
        'our_strengths',
    ];

    protected $casts = [
        'pages' => 'array',
        'photos' => 'array',
    ];
}