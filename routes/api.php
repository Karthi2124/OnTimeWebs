<?php

use Illuminate\Support\Facades\Route;
use App\Models\BusinessEnquiry;

Route::get('/enquiries', function () {
    return BusinessEnquiry::latest()->get();
});