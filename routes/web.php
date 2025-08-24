<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class,'index']);
Route::get('product/{id}', [ProductController::class,'show'])->name('product.show');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::post('product', [ProductController::class,'store'])->name('product.store');
Route::get('product/search', [ProductController::class, 'search']);
Route::get('product', [ProductController::class,'create'])->name('product.create');
Route::delete('product/{id}', [ProductController::class,'destroy'])->name('product.destroy');


