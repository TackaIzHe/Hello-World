<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/show1', [UserController::class, 'show1']);
Route::get('/show2', [UserController::class, 'show2']);
Route::get('/show3', [UserController::class, 'show3']);