<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts',function (){
    return "Aqui se mostraran todos los posts";
});

Route::get('posts/create',function(){
    return "Aqui se mostrara un formulario para crear un post";
}); 

Route::get('/posts/{post}',function ($post){
    return "Aqui se mostrara el post {$post}";
});
