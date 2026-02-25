<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessEnquiryController;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Store Business Enquiry
Route::post('/business-enquiry', [BusinessEnquiryController::class, 'store'])
    ->name('business.enquiry.store');