<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('blank', function () {
    return view('blank');
});

Route::get('dash', function () {
    return view('dashboard');
});
