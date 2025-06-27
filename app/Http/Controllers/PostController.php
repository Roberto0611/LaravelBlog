<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts  = Post::orderBy('id','desc')->paginate(); 
        return view('posts.index',compact('posts')); # usamos compact para pasar la variable
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        // Asignacion masiva
        Post::create(attributes: $request->all());

        return redirect()->route('posts.index'); # redirigir 
    }

    public function edit(Post $post){
        //$post = Post::find($post);
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request,Post $post){

        $post->update($request->all());
    
        return redirect()->route('posts.show',$post);
    }

    public function show(Post $post){
        //$post = Post::find($post);
        return view('posts.show',compact('post'));
    }

    public function destroy(Post $post){
        //$post = Post::find($post);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
