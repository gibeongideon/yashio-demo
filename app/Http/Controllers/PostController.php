<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::with('category','author')->get()
        ]);
    }

    public function show(Post $post)
    {
        die($post->roles);
        return view('post',[
            'post'=> $post
        ]);
             
    }

}
