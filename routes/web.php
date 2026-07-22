<?php

use Illuminate\Support\Facades\Route;

// Simple static-content routes — Route::view() is a shortcut for pages
// that don't need any controller logic, just render a Blade view directly.
Route::view('/', 'pages.dashboard')->name('dashboard');
Route::view('/admission', 'pages.admission')->name('admission');
Route::view('/campus-life', 'pages.campuslife')->name('campuslife');

Route::view('/admin', 'pages.login')->name('login');

Route::post('/admin', function () {
    return redirect()->route('admin.dashboard');
})->name('login.attempt');

Route::post('/admin/logout', function () {
    return redirect()->route('login');
})->name('logout');

Route::view('/admin/dashboard', 'pages.admin-dashboard')->name('admin.dashboard');
Route::view('/admin/informations/homepage', 'admin.informations.homepage')->name('admin.informations.homepage');
Route::put('/admin/informations/homepage', function () {
    return redirect()->route('admin.informations.homepage');
})->name('admin.informations.homepage.update');
Route::view('/admin/informations/about', 'admin.informations.about')->name('admin.informations.about');
Route::put('/admin/informations/about', function () {
    return redirect()->route('admin.informations.about');
})->name('admin.informations.about.update');
Route::view('/admin/informations/admissions', 'admin.informations.admissions')->name('admin.informations.admissions');
Route::put('/admin/informations/admissions', function () {
    return redirect()->route('admin.informations.admissions');
})->name('admin.informations.admissions.update');
Route::view('/admin/informations/contacts', 'admin.informations.contacts')->name('admin.informations.contacts');
Route::put('/admin/informations/contacts', function () {
    return redirect()->route('admin.informations.contacts');
})->name('admin.informations.contacts.update');
Route::view('/admin/campus-life/snapshot-albums', 'admin.campuslife.snapshots')->name('admin.campuslife.snapshots');
Route::view('/admin/campus-life/facebook-sync', 'admin.campuslife.facebook-sync')->name('admin.campuslife.facebook-sync');
Route::view('/admin/campus-life/ai-suggestions', 'admin.campuslife.ai-suggestions')->name('admin.campuslife.ai-suggestions');
Route::view('/admin/announcements', 'admin.announcements')->name('admin.announcements');
Route::view('/admin/files', 'admin.files')->name('admin.files');
Route::view('/admin/settings', 'admin.settings')->name('admin.settings');
Route::view('/admin/users', 'admin.users')->name('admin.users');