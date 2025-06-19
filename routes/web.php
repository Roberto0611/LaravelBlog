<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts',[PostController::class, 'index']);

Route::get('posts/create',[PostController::class, 'create']); 

Route::get('/posts/{post}',[PostController::class, 'show']);

Route::get('prueba',function(){
    
   #CREAR NUEVO POST
    // $post = new Post;

    // $post->title = 'TiTulO DE PrueBA 4';
    // $post->content = 'Contenido de prueba 4';
    // $post->categoria = 'categoria de prueba 4';

    // $post->save(); 

    #Buscar registro
    $post = Post::find(5);
    return $post;

    #ACTUALIZAR REGISTRO 
    
    // $post = Post::where('title', 'Titulo de prueba 2') -> first();

    // $post->categoria = 'Desarrollo web';
    // $post->save();

    // return $post;
    
    # LISTAR REGISTROS
    // $posts = Post::orderBy('id','desc')->take(2)->get();

    // return $posts;
    

    # ELIMINAR REGISTROS
    
    // $post = Post::find(4);
    // $post->delete();
});