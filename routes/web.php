<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/profile', [ProfileController::class,'index'])->name('profile');
Route::post('/profile', [ProfileController::class,'store'])->name('profile.store');


Route::get('/products', [ProductsController::class,'index'])->name('products');
Route::post('/products', [ProductsController::class,'store'])->name('products.store');
Route::get('/products-list', [ProductsController::class,'productList'])->name('products-list');


Route::get('/order/{id}', [OrderController::class,'order'])->name('order');
Route::get('/total-order', [OrderController::class,'totalOrder'])->name('total-order');
Route::post('/create-order', [OrderController::class,'createOrder'])->name('create-order');
Route::delete('/total-order/{id}', [OrderController::class, 'delete'])->name('total-order-delete');



Route::get('/', function () {
    return view('welcome');
});