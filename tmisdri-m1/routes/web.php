<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('/contact');
});

Auth::routes();
Route::get('/home', function () {return redirect('/');})->name('home');
Route::get('/admin', [App\Http\Controllers\MainControleer::class, 'index'])->name('admin');

Route::get('/', [App\Http\Controllers\ProductController::class,'main']);
Route::get('/catalog', [App\Http\Controllers\ProductController::class,'index']);
Route::get('/addtocart/{id}', [App\Http\Controllers\ProductController::class,'addtocart']);
Route::get('/cart', [App\Http\Controllers\ProductController::class,'cart']);

Route::get('/cartadd/{id}', [App\Http\Controllers\CartController::class,'addbtn']);
Route::get('/cartrem/{id}', [App\Http\Controllers\CartController::class,'removebtn']);
Route::get('/cartall/{id}', [App\Http\Controllers\CartController::class,'removeall']);

Route::get('/filter', [App\Http\Controllers\ProductController::class,'filter']);

