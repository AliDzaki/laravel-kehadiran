<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    return view('partials.sidebar-admin');
});
Route::get('/user', function () {
    return view('admin.siswa');
});
Route::get('tambah', function () {
    return view('forms.tambah-user');
});