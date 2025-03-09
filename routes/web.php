<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/shop/all', [PublicController::class, 'all'])->name('all');
Route::get('/shop-details/{id}/{name}', [PublicController::class, 'details'])->name('details');

Route::get('/review/index', [ReviewController::class, 'index'])->name('review.index');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');