<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            Log::info('Starting email send process', [
                'from' => $validated['email'],
                'name' => $validated['name']
            ]);

            Mail::to(config('mail.to.address', 'charlesdiestro6@gmail.com'))
                ->send(new ContactFormMail($validated));

            Log::info('Email sent successfully');

            return response()->json([
                'message' => 'Thank you for your message. We will get back to you soon!'
            ]);
        } catch (Exception $e) {
            Log::error('Contact form error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data' => $request->all()
            ]);

            return response()->json([
                'message' => 'Sorry, there was an error sending your message. Please try again later.',
                'error' => app()->environment('local') ? $e->getMessage() : null
            ], 500);
        }
    }
} 