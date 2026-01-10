<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Public Blog Routes
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

// Sitemap needs are handled by static file generation in PostObserver

// Admin Authentication Routes
Route::prefix('admin-login')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin.login.submit');
});

Route::post('/admin/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');

// Public Auth Alias (Using Admin Controller for now)
Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
// Placeholder for register
Route::get('/signup', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('register');

// Admin Protected Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // User Management Routes
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::patch('users/{user}/toggle-admin', [App\Http\Controllers\Admin\UserController::class, 'toggleAdmin'])->name('users.toggle-admin');

    // Blog Management Routes
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
});
