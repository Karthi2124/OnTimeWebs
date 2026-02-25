<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'plan' => 'nullable|string',
            'message' => 'required|string',
        ]);

        Mail::to(config('mail.admin_email'))
            ->send(new ContactMail($data));

        return back()->with('success', 'Message sent successfully!');
    }
}