<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', WelcomeController::class);

Route::get('/admin', [AdminController::class, 'dashboard']);

Route::get('/user', [UserController::class, 'index']);
