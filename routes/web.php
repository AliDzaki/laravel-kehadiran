<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    return view('partials.sidebar-admin');
});
Route::get('/keh', function () {
    return view('admin.kehadiran');
});
