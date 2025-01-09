<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->middleware('verified');

Route::resource('articles', ArticleController::class)->middleware('auth');
