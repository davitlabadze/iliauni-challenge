<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'posts'])->name('posts');
Route::get('/post/{id}/{title}', [PostController::class, 'post'])->name('post');
