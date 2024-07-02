<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


// register
Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create')->name('register');
    Route::post('/register', 'store')->name('register');
});

// profile create
Route::get('/biodata', function () {
    return view('pages.profile.create');
})->name('biodata');

Route::post('/profile/create/{id}', [RegisteredUserController::class, 'storeProfile'])->name('profile.create');
Route::post('/bank/create/{id}', [RegisteredUserController::class, 'storeBank'])->name('bank.create');

Route::delete('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
