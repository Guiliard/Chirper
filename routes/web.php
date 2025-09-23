<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Logout;

Route::get('/', [ChirpController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::resource('chirps', ChirpController::class)
        ->only(['store', 'edit', 'update', 'destroy']);
});

Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');
 
Route::post('/register', Register::class)
    ->middleware('guest');

Route::post('/logout', Logout::class)
    ->middleware('auth');