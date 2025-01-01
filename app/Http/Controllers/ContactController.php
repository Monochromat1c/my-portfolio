<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Exception;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            \Log::info('Sending email with data:', $validated);
            Mail::to('charlesdiestro6@gmail.com')->send(new ContactFormMail($validated));
            \Log::info('Email sent successfully');
            return response()->json(['message' => 'Thank you for your message. We will get back to you soon!']);
        } catch (Exception $e) {
            \Log::error('Contact form error: ' . $e->getMessage() . "\n" . $e->getTraceAsString());
            return response()->json(
                ['message' => 'Sorry, there was an error sending your message. Please try again later.'],
                500
            );
        }
    }
} 