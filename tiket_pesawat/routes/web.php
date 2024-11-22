<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('kontak.kirim');

// routes/web.php
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-store', [AuthController::class, 'storeLogin'])->name('login.store');

Route::post('/store-signup', [AuthController::class, 'storeSignup'])->name('storeSignup');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/{user}/modal', [UserController::class, 'showModal'])->name('users.show-modal');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

// Routes for ticket booking
Route::get('/tiket', [TiketController::class, 'tiket'])->name('tiket');
Route::post('/tiket', [TiketController::class, 'tiket'])->name('tiket.kirim');


Route::get('halaman', function () {
    return view('halaman');
})->name('halaman');
