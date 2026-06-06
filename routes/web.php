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


/// userContreollers routing

Route::get('/',[UserController::class,'Home']);
Route::get('/carts',[UserController::class,'carts']);
Route::get('/orders',[UserController::class,'orders']);
Route::get('/products',[UserController::class,'products']);
Route::get('/checkouts',[UserController::class,'checkouts']);


///////    admin routing 


Route::get('/admin/dashboard',[adminController::class,'dashboard']);
Route::get('/admin/order',[adminController::class,'order']);
Route::get('/admin/insert',[adminController::class,'insert']);
Route::get('/admin/edit',[adminController::class,'edit']);
Route::get('/admin/read',[adminController::class,'read']);






