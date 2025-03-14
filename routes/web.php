<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

// About Route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Route (Fix for the error)
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Profile Route
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Logout Route (If needed for authentication)
Route::post('/logout', function () {
    // Logout logic here
})->name('logout');

