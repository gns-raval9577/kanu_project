<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        $contactData = $request->only('name', 'email', 'subject', 'message');

        Mail::to('admin@example.com')->send(new ContactMail($contactData));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
