<?php

use Illuminate\Support\Facades\Route;
use App\Models\BusinessEnquiry;
use App\Http\Controllers\Api\AuthController;

Route::get('/enquiries', function () {
    return BusinessEnquiry::latest()->get();
});


Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});