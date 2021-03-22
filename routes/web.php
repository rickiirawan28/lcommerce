<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('/home', [PageController::class, 'home'])->name('home');

Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
});

Route::group(['prefix' => 'cart', 'middleware' => 'auth'], function () {
    Route::post('{product:slug}/add', [CartController::class, 'create'])->name('cart.add');
});
