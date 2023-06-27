<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.all', [
            'posts' => Post::with('category','author','tags')//remove N-1 issue
                            //   ->paginate(18)
                              ->get()
        ]);
    }

    public function show(Post $post)
    {
        // die($post->tags);
        return view('posts.show',[
            'post'=> $post
        ]);
             
    }

    /**
     * Show the form for creating a new Post.
     */
    
    public function create()    
    {
    // Fetch all tags from the database
    $tags = Tag::all();
    $categories = Category::all();

    // Return the view for creating a new post with tags
    return view('posts.create', [
        'tags' => $tags,
        'categories' => $categories
    ]);
    }



public function store(Post $post,Request $request)
{
    /**
     * Store a newly created Post in storage.
     */    // Validate the incoming request data

    $validatedData = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'slug' => 'required',
        'tags' => 'array', 
    ]);

    $post->tittle = $validatedData['title'];
    $post->body = $validatedData['body']; 
    $post->slug = $validatedData['slug']; 
    $post->user_id = auth()->user()->id; 

    // die('debug1!');//debug

    $post->save();
    // Attach tags to the post
    if (isset($validatedData['tags'])) {
        $post->tags()->sync($validatedData['tags']);
    }
 
    // Redirect to the post index page with a success message
    return redirect()->route('index')->with('success', 'Post created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();

        return view('posts.edit', [
            'post' => $post,
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required',
            'tags' => 'array', 
        ]);

        $post->tittle = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->slug = $validatedData['slug'];
        $post->user_id = auth()->user()->id;

        $post->save();

        if (isset($validatedData['tags'])) {
            $post->tags()->sync($validatedData['tags']);
        } else {
            $post->tags()->detach(); // Remove all tags if none are selected
        }

        return redirect()->route('index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->tags()->detach(); // Remove all tags associated with the post
        $post->delete();

        return redirect()->route('index')->with('success', 'Post deleted successfully');
    }
}
