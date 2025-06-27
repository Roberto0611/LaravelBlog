<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\postCreatedMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index(){
        $posts  = Post::orderBy('id','desc')->paginate(); 
        return view('posts.index',compact('posts')); # usamos compact para pasar la variable
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePostRequest $request){

        // Asignacion masiva
       $post = Post::create(attributes: $request->all());

        // Enviar mail
        Mail::to('prueba@prueba.com')->send(new postCreatedMail($post));

        return redirect()->route('posts.index'); # redirigir 
    }

    public function edit(Post $post){
        //$post = Post::find($post);
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request,Post $post){

        $request->validate([
            'title' => 'required|min:5|max:255',
            'slug' => "required|unique:posts,slug,{$post->id}",
            'category' => 'required',
            'content' => 'required'
        ]); 

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
