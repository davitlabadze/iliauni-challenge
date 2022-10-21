<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'posts'])->name('posts');
// Route::get('/test', [TestController::class, 'data'])->name('data');
Route::get('/test', [TestController::class, 'data'])->name('data');

Route::get('/post/{id}/{title}', [PostController::class, 'post'])->name('post');
