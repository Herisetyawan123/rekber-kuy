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
    

    Route::delete('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // profile
    Route::get('/profile', function () {
        return view('pages.profile.index');
    })->name('profile');

    // invoice
    Route::get('/invoice/penjual', function () {
        return view('pages.invoice.index');
    })->name('invoice.penjual');
    Route::get('/invoice/pembeli', function () {
        return view('pages.invoice.index');
    })->name('invoice.pembeli');

    // invoice details
    Route::get('/invoice/penjual/detail', function () {
        return view('pages.invoice.detail');
    })->name('invoice.detail.penjual');
    Route::get('/invoice/pembeli/detail', function () {
        return view('pages.invoice.detail');
    })->name('invoice.detail.pembeli');

    // index chat
    Route::get('/room/penjual', function () {
        return view('pages.chat.index');
    })->name('room.penjual');
    Route::get('/room/pembeli', function () {
        return view('pages.chat.index');
    })->name('room.pembeli');


    Route::get('/room/{code}', function () {
        return view('pages.chat.detail');
    })->name('chat');
    



});

// landing
Route::get('/', function () {
    return view('pages.landing.index');
});

