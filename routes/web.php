<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MenuController;

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

Route::get('/',[ShopController::class,'show']);
Route::get('/search',[ShopController::class,'search']);

Route::get('menu/{id}',[MenuController::class,'show']);
Route::get('cart', [MenuController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [MenuController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [MenuController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [MenuController::class, 'remove'])->name('remove.from.cart');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
