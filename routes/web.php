<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'login'])->name('home');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'processLogin'])->name('login.process');

Route::middleware('login.required')->group(function () {
    Route::post('/logout', [PageController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
    Route::get('/profile', [PageController::class, 'profile'])->name('profile');
    Route::get('/welcome', [PageController::class, 'welcome'])->name('welcome');
});
