<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/Welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('Dashboard.offers');
});

// Administrator Routes
Route::prefix('Admin/')->name('admin.')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        // Login Routes
        Route::get('Login', 'index')->name('login')->defaults('guard', 'admin');
        Route::post('Login', 'login')->name('login.submit')->defaults('guard', 'admin');
        // Register Routes
        Route::get('Register', 'indexregister')->name('register')->defaults('guard', 'admin');
        Route::post('Register', 'indexregister')->name('register.submit')->defaults('guard', 'admin');
        // Default Routes
        Route::get('Dashboard', function () {
            return view('Admin.dashboard');
        })->name('dashboard');
    });
});

// Freelancers Routse
Route::prefix('Freelancer/')->name('freelancer.')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        // Login Routes
        Route::get('Login', 'index')->name('login')->defaults('guard', 'freelancer');
        Route::post('Login', 'login')->name('login.submit')->defaults('guard', 'freelancer');
        // Register Routes
        Route::get('Register', 'indexregister')->name('register')->defaults('guard', 'freelancer');
        Route::post('Register', 'register')->name('register.submit')->defaults('guard', 'freelancer');
        // Default Routes
        Route::get('Dashboard', function () {
            return view('Freelancer.dashboard');
        })->name('dashboard');
    });
});

// Clients Routes
Route::controller(LoginController::class)->name('web.')->group(function () {
    // Login Routes
    Route::get('Login', 'index')->name('login')->defaults('guard', 'web');
    Route::post('Login', 'login')->name('login.submit')->defaults('guard', 'web');
    // Register Routes
    Route::get('Register', 'indexregister')->name('register')->defaults('guard', 'web');
    Route::post('Register', 'register')->name('register.submit')->defaults('guard', 'web');
    // Default Routes
    Route::get('Dashboard', function () {
        return 'Hello User!!!';
        // return view('web.dashboard');
    })->name('web.dashboard');
});
