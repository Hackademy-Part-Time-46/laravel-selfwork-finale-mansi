<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->middleware('verified');

Route::resource('articles', ArticleController::class)->middleware('auth');

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
