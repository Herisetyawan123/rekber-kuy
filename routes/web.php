<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});
Route::get('/', function () {
    return view('pages.landing.index');
});
