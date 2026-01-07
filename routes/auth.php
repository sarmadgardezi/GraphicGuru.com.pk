<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Placeholder for Breeze routes
Route::middleware('guest')->group(function () {
    Route::get('login', function () {
        return "Login Page Placeholder (Run 'php artisan breeze:install' after composer install)";
    })->name('login');
    
    Route::get('register', function () {
        return "Register Page Placeholder";
    })->name('register');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', function () {
        auth()->logout();
        return redirect('/');
    })->name('logout');
});
