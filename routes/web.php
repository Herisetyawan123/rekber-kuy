<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// register
Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');

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
    });
    
    Route::delete('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// landing
Route::get('/', function () {
    return view('pages.landing.index');
});
