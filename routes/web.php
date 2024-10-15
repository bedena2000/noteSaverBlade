<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::middleware('auth')->group(function () {
    Route::view('/', 'dashboard')->name('dashboard');
});


// Auth
Route::middleware('guest')->group(function () {
    Route::get("/login", [LoginController::class, 'show'])->name('login');
    Route::post("/login", [LoginController::class, "create"]);
    
    Route::get("/register", [RegisterController::class, 'show'])->name('register');
    Route::post("/register", [RegisterController::class, 'create']);
});


// Redirect on Error
Route::fallback(function () {
    return redirect()->route('dashboard');
});