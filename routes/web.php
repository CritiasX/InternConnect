<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LandingController::class, 'showLogin'])->name('show.login');
    Route::get('/register', [LandingController::class, 'showRegister'])->name('show.register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard.student', [LandingController::class, 'showHome'])->name('show.student');
    Route::get('dashboard.hte', [LandingController::class, 'showHTE'])->name('show.hte');
    Route::get('dashboard.sip', [LandingController::class, 'showSip'])->name('show.sip');
});

    

Route::get('/welcome', [LandingController::class, 'showLanding'])->name('show.landing');

