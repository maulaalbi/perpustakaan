<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminSessionMiddleware;

Route::get('/', function () {
    return view('login.admin' ,[
        "tittle" => "LOGIN ADMIN",
    ]);
});
Route::get('/dashboard', function () {
    $totalBuku = DB::table('books')->count();
    $bukuTersedia = DB::table('books')->where('status',0)->count();
    $bukuDipinjam = DB::table('books')->where('status',1)->count();

  session()->put('totalBuku', $totalBuku);
  session()->put('bukuTersedia', $bukuTersedia);
  session()->put('bukuDipinjam', $bukuDipinjam);
    return view('dashboard.admin' ,[
        "tittle" => "DASHBOARD ADMIN",
        "totalBuku" => $totalBuku,
        "bukuTersedia" => $bukuTersedia ,
        "bukuDipinjam" => $bukuDipinjam
        
    ]);
})->middleware([AdminSessionMiddleware::class]);
Route::get('/tersedia', function () {
    return view('dashboard.bookTersedia' ,[
        "tittle" => "BUKU TERSEDIA"
    ]);
})->middleware([AdminSessionMiddleware::class]);
Route::get('/borrow', function () {
    return view('dashboard.bookBorrow' ,[
        "tittle" => "BUKU DIPINJAM",
        
    ]);
})->middleware([AdminSessionMiddleware::class]);
Route::get('/formBuku', function () {
    return view('dashboard.formBuku' ,[
        "tittle" => "FORM BUKU"
    ]);
})->middleware([AdminSessionMiddleware::class]);




// Route::post('/admin/create',[AdminController::class , 'createAdmin']);
// Route::get('/admin/login',[AdminController::class , 'formLogin']);
Route::post('/admin/login',[AdminController::class , 'doLogin'])
;
// Route::get('/admin/login',[AdminController::class , 'doLogin']);
// Route::get('/admin/book',[AdminController::class , 'showBook']);

Route::post('/admin/logout',[AdminController::class , 'logout']);


//book
Route::post('/book',[BookController::class , 'createBook'])
->middleware([AdminSessionMiddleware::class]);
Route::get('/book/{id}',[BookController::class , 'getById']);
Route::post('/updateBook/{id}',[BookController::class , 'updateById']);


