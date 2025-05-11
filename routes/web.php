<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/**** Hotel routes */

Route::get('/hotel', function () {
    return view('hotel.hotel');
})->name('hotel');

Route::get('/hotel-listing', function () {
    return view('hotel.hotel-listing');
})->name('hotel-listing');

Route::get('/hotel/book', function () {
    return view('hotel.hotel-booking');
})->name('hotel.booking');

Route::post('/hotel/book', function (Request $request) {
    // Placeholder for booking form submission handling
    // Validate and process booking data here
    return redirect()->route('booking.confirmed');
})->name('hotel.book.submit');

Route::get('/booking/confirmed', function () {
    return view('hotel.booking-confirmed');
})->name('booking.confirmed');

/**** END Hotel routes */


// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    // Handle login logic here
    // This is a placeholder
    return redirect()->intended('/');
})->name('login.submit');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function (Request $request) {
    // Handle registration logic here
    // This is a placeholder
    return redirect('/');
})->name('register.submit');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');
