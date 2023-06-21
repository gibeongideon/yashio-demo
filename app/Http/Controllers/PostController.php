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
        return view('posts', [
            'posts' => Post::with('category','author')->get()
        ]);
    }

    public function show(Post $post)
    {
        // die($post->tags);
        return view('post',[
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
    return view('createpost', [
        'tags' => $tags,
        'categories' => $categories
    ]);
    }

    /**
     * Store a newly created Post in storage.
     */

public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'tittle' => 'required',
        'body' => 'required',
        'tags' => 'array', 
    ]);

    $user = User::take(1)->id; //TODO it should be from request

    // Create a new post 
    $post = new Post;
    $post->tittle = $validatedData['tittle'];
    $post->body = $validatedData['body']; 
    $post->user_id = $user;//auth()->user()->id; 

    $post->save();

    // Attach tags to the post
    if (isset($validatedData['tags'])) {
        $post->tags()->sync($validatedData['tags']);
    }

    // Redirect to the post index page with a success message
    return redirect()->route('createpost')->with('success', 'Post created successfully');
}





    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
