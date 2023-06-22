<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    // public function index()
    // {
    //     $tags = Tag::all();
    //     return view('tags.index', compact('tags'));
    // }

    public function create()
    {
        return view('posts.tags.create');
    }

    public function store(Request $request)

    {
        // Handle tag creation logic
    $validatedData = $request->validate([
        'name' => 'required',
    ]);

    Tag::create($validatedData);

    return redirect()->route('posts.create')->with('success', 'Tag created successfully');
    }

    // public function edit(Tag $tag)
    // {
    //     return view('tags.edit', compact('tag'));
    // }

    // public function update(Request $request, Tag $tag)
    // {
    //     // Handle tag update logic
    // }

    // public function destroy(Tag $tag)
    // {
    //     // Handle tag deletion logic
    // }


}
