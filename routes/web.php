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

    // history transaksi
    Route::get('/transaksi/penjual', function () {
        return view('pages.transaksi.index');
    })->name('transaksi.penjual');
    Route::get('/transaksi/pembeli', function () {
        return view('pages.transaksi.index');
    })->name('transaksi.pembeli');

    // history transaksi details
    Route::get('/transaksi/penjual/detail', function () {
        return view('pages.transaksi.detail');
    })->name('transaksi.detail.penjual');
    Route::get('/transaksi/pembeli/detail', function () {
        return view('pages.transaksi.detail');
    })->name('transaksi.detail.pembeli');

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


    // invoice
    Route::get('/invoice', function () {
        return view('pages.invoice.index');
    })->name('invoice');
    



});

// landing
Route::get('/', function () {
    return view('pages.landing.index');
});

