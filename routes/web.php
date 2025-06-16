<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome',[LandingController::class,'showLanding'])->name('show.landing');

Route::get('/login',[LandingController::class,'showLogin'])->name('show.login');
Route::get('/register',[LandingController::class,'showRegister'])->name('show.register');

Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/register',[AuthController::class,'register'])->name('register');
