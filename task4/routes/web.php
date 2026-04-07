<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/all', [UserController::class, 'all']);
Route::get('/func1', [UserController::class, 'func1']);
Route::get('/func2', [UserController::class, 'func2']);

Route::get('/{name}/{surname}', [UserController::class, 'show']);