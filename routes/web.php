<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
})->name('signup');
// / comment /

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::post('registersave', [ProfileController::class, 'register'])->name('registersave');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [ProfileController::class, 'login'])->name('loginmatch');

Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');
