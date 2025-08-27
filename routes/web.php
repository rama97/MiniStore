<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [ProductController::class,'index']);
Route::get('product/{id}', [ProductController::class,'show'])->name('product.show');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::post('product', [ProductController::class,'store'])->name('product.store');
Route::post('product/search', [ProductController::class, 'search'])->name('product.search');
Route::get('product', [ProductController::class,'create'])->name('product.create');
Route::delete('product/{id}', [ProductController::class,'destroy'])->name('product.destroy');
Route::get('cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/increase/{product}', [CartController::class, 'increase'])->name('cart.increase');
Route::get('/cart/decrease/{product}', [CartController::class, 'decrease'])->name('cart.decrease');
Route::delete('/cart/delete/{id}', [CartController::class,'delete'])->name('cart.delete');
//Route::delete('cart/remove/{id}', [CartController::class,'remove'])->name('cart.remove');





