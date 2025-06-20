<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts',[PostController::class, 'index']);

Route::get('posts/create',[PostController::class, 'create']); 

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/{post}',action: [PostController::class, 'show']);

Route::get('/posts/{post}/edit',[PostController::class,'edit']);

Route::put('posts/{post}/edit', [PostController::class,'update']);

Route::delete('/posts/{post}/delete',[PostController::class, 'destroy']);