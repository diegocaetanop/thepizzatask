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
    return view('index');
})->name('index');

Route::group([
    "prefix" => "products"
], function () {

    Route::get('', function () {
        return view('products');
    })->name('products');

    Route::get('/{id}', function () {
        return view('product');
    })->name('product');
});

Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::group([
    "prefix" => "user"
], function () {
    Route::get('/login', function () {
        return view('login');
    })->name('user-login');
    Route::get('/profile', function () {
        return view('profile');
    })->name('user-profile');
    Route::get('/purchases', function () {
        return view('purchases');
    })->name('user-purchases');
});
