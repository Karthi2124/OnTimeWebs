<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessEnquiryController;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Store Business Enquiry
Route::post('/business-enquiry', [BusinessEnquiryController::class, 'store'])
    ->name('business.enquiry.store');

Route::post('/contact-send', 
    [ContactController::class, 'send']
)->name('contact.send');