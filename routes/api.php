<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::post('/admin/create',[AdminController::class , 'createAdmin']);
// Route::get('/admin/login',[AdminController::class , 'formLogin']);
// Route::post('/admin/login',[AdminController::class , 'doLogin']);
// Route::get('/admin/book',[AdminController::class , 'showBook']);

// Route::post('/admin/logout',[AdminController::class , 'logout']);


//book
// Route::post('/book/create',[BookController::class , 'createBook']);




