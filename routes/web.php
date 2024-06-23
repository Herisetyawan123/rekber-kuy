<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;




Route::get('/chat', function () {
    return view('pages.chat.index');
});
Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');
Route::controller(AuthenticatedSessionController::class)->group(function(){
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store')->name('login');
    Route::get('/logout', 'destroy')->name('logout');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});
Route::get('/', function () {
    return view('pages.landing.index');
});
