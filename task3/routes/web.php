<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'show']);
Route::get('/user/all', [UserController::class, 'all']);
Route::get('/user/{name}', [UserController::class, 'name']);
Route::get('/user/city/{name}', [UserController::class, 'city']);
Route::get('/{id}', [PostController::class, 'show']);