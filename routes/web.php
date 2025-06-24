<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

// Route::get('/posts',[PostController::class, 'index'])->name('posts.index');

// Route::get('posts/create',[PostController::class, 'create'])->name('posts.create'); 

// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Route::get('/posts/{post}',action: [PostConroller::class, 'show'])->name('posts.show');

// Route::get('/posts/{post}/edit',[PostControltler::class,'edit'])->name('posts.edit');

// Route::put('posts/{post}/edit', [PostController::class,'update'])->name('posts.update');

// Route::delete('/posts/{post}/delete',[PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('articulos',PostController::class)
    ->parameters(['articulos' => 'post'])
    ->names('posts');