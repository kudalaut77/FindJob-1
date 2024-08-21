<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Auth;


// Crud dasar
Route::resource('penggunas', PenggunaController::class);

// login
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

// View
Route::get('/', function () {
    return view('Frontend.LayOut.Halaman.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/userprofile', [App\Http\Controllers\FrontendController::class, 'userProfile'])->name('userprofile');


