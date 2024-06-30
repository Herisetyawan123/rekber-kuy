<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Middleware\CheckProfile;
use Illuminate\Support\Facades\Route;

// register
Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create')->name('register');
    Route::post('/register', 'store')->name('register');
});

// auth login
Route::controller(AuthenticatedSessionController::class)->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store')->name('login');
});

// after dashboard
Route::middleware(['auth', CheckProfile::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard.index');
    })->name('home');


    // profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

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
    Route::resource('/room-penjual' , RoomController::class);
    Route::post('/chat', [RoomController::class, 'chat'])->name('chat.store');
    
    Route::get('/room/pembeli', function () {
        return view('pages.room.index');
    })->name('room.pembeli');

    Route::get('/room/{code}', function () {
        return view('pages.room.detail');
    })->name('chat');


    // invoice
    Route::get('/invoice', function () {
        return view('pages.invoice.index');
    })->name('invoice');

    // invoice details
    Route::get('/invoice/detail', function () {
        return view('pages.invoice.detail');
    })->name('invoice.detail');

    // profile cteate
    Route::get('/biodata', function () {
        return view('pages.profile.create');
    })->name('biodata');
});


// landing
Route::get('/', function () {
    return view('pages.landing.index');
})->name('kontol');


// profile cteate
Route::get('/biodata', function () {
    return view('pages.profile.create');
})->name('biodata');

Route::post('/profile/create/{id}', [RegisteredUserController::class, 'storeProfile'])->name('profile.create');
Route::post('/bank/create/{id}', [RegisteredUserController::class, 'storeBank'])->name('bank.create');

Route::delete('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::post('/profile/upload', [ProfileController::class, 'uploadProfile'])->name('user.avatar.edit');
