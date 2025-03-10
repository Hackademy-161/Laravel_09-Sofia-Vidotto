<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SkinQuizController;
use App\Http\Controllers\SkinResultController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/shop/all', [PublicController::class, 'all'])->name('all');
Route::get('/shop-details/{id}/{name}', [PublicController::class, 'details'])->name('details');

Route::get('/review/index', [ReviewController::class, 'index'])->name('review.index');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');


Route::get('/quiz', [SkinQuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz/save', [SkinQuizController::class, 'saveResult'])->name('quiz.save');


Route::get('/auth/github', [AuthController::class, 'redirectToGithub'])->name('github.login');
Route::get('/auth/github/callback', [AuthController::class, 'handleGithubCallback']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
