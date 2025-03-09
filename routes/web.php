<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


Route::get('/shop/all', [ProductController::class, 'shop_all'])->name('shop.all');
Route::get('/shop-details/{id}/{name}', [ProductController::class, 'shop_details'])->name('shop.details');