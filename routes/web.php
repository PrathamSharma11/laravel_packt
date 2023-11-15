<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Admin Controller
Route::get('/admin/dashboard',[AdminController::class,'index']);

//api
Route::get('/store-data',[ProductController::class,'store']);

//product controller
Route::get('/admin/display',[ProductController::class,'display']);
Route::post('/save',[ProductController::class,'save']);
Route::get('/product/view/{id}',[ProductController::class,'view']);
Route::get('/product/delete/{id}',[ProductController::class,'delete']);
Route::get('/product/edit/{id}',[ProductController::class,'edit']);
Route::post('product/update',[ProductController::class,'update']);




//scout
// Route::get('/users',[UserController::class,'index']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/details/{id}',[ProductController::class,'view']);

