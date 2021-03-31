<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomePageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\StripeController;

// Home Page START ====================================================================
Route::get('/', [HomePageController::class, 'index']);
Route::get('/quick/product/{id}',[HomePageController::class,'ShowProductByID'])->name('product.byid');
// Home Page END ======================================================================

// Cart START =========================================================================
Route::get('/add/to/cart/{id}',[CartController::class,'addCart']);
Route::get('/check',[CartController::class,'check']);
Route::get('/show/cart',[CartController::class,'showCart'])->name('show.cart');
// Cart END ===========================================================================

// Cheakout START =========================================================================
Route::get('/checkout', [StripeController::class, 'index'])->name('show.checkout');
Route::post('/transaction', [StripeController::class, 'makePayment'])->name('make-payment');
// Cheakout END ===========================================================================