<?php

use Illuminate\Support\Facades\Route;




Route::get('/register', function () {
    return view('pages.auth.register');
});
Route::get('/login', function () {
    return view('pages.auth.login');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});
Route::get('/', function () {
    return view('pages.landing.index');
});
