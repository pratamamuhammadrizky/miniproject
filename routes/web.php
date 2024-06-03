<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', [IndexController::class, 'showIndex'])->name('index');
Route::get('/tab', [TabController::class, 'showTab'])->name('tab');
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
