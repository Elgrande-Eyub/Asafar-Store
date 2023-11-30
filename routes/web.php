<?php

use App\Http\Controllers\homeController;
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

Route::get('/', [homeController::class,'index'])->name('index');

Route::get('/shop',  [homeController::class,'shop'])->name('shop');

Route::get('/cart',  [homeController::class,'cart'])->name('cart');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/order-tracking', function () {
    return view('order-tracking');
})->name('order-tracking');

Route::get('/product/{sku}',  [homeController::class,'show'])->name('single_product');


Route::get('add-to-cart', [homeController::class, 'addToCart'])->name('addToCart');

Route::post('update-cart-quantity', [homeController::class, 'updateCartQuantity'])->name('updateQTE');
