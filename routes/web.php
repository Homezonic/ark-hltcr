<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('blank', function () {
    return view('blank');
});

Route::get('subscription', function () {
    return view('subscription');
})->name('subscription');
