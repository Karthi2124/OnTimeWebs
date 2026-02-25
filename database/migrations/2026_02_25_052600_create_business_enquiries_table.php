<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('business_enquiries', function (Blueprint $table) {
            $table->id();

            $table->string('website_plan');
            $table->string('business_category');
            $table->string('brand_name');
            $table->string('contact_number');
            $table->string('email')->nullable();

            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('gmb_link')->nullable();
            $table->text('address')->nullable();

            $table->string('logo')->nullable();
            $table->json('photos')->nullable();
            $table->json('pages')->nullable();

            $table->text('about_business')->nullable();
            $table->text('about_products')->nullable();
            $table->string('highlights')->nullable();

            $table->text('why_choose_us')->nullable();
            $table->text('testimonials')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->text('our_strengths')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('business_enquiries');
    }
};