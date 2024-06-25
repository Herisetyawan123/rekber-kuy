<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// register
Route::controller(RegisteredUserController::class)->group(function(){
    Route::get('/register', 'create')->name('register');
    Route::post('/register', 'store')->name('register');
});

// auth login
Route::controller(AuthenticatedSessionController::class)->group(function(){
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store')->name('login');
});

// after dashboard
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('pages.dashboard.index');
    })->name('home');
    
    Route::get('/chat', function () {
        return view('pages.chat.index');
    })->name('chat');
    
    Route::delete('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// landing
Route::get('/', function () {
    return view('pages.landing.index');
});

// profile
Route::get('/profile', function () {
    return view('pages.profile.index');
})->name('profile');

// invoice
Route::get('/invoice', function () {
    return view('pages.invoice.index');
})->name('invoice');

// invoice details
Route::get('/invoice/details', function () {
    return view('pages.invoice.details');
})->name('invoiceDetails');