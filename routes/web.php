<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;

// Page routes
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/contact', 'contact')->name('contact');
});

// Contact form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Add this temporary test route
Route::get('/test-mail', function () {
    try {
        Mail::raw('Test email from Laravel', function($message) {
            $message->to('charlesdiestro6@gmail.com')
                   ->subject('Test Email');
        });
        return 'Email sent successfully!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
