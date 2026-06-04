<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth controller routing 
Route::get('/login',[AuthController::class ,'login']);

Route::get('/signup',[AuthController::class ,'signup']);


/// userContreollere routing

