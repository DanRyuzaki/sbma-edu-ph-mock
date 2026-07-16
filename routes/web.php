<?php

use Illuminate\Support\Facades\Route;

// Simple static-content routes — Route::view() is a shortcut for pages
// that don't need any controller logic, just render a Blade view directly.
Route::view('/', 'pages.dashboard')->name('dashboard');
Route::view('/admission', 'pages.admission')->name('admission');
Route::view('/campus-life', 'pages.campuslife')->name('campuslife');
Route::view('/admin', 'pages.login')->name('login');