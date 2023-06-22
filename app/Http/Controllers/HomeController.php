<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

/*Test 3
1. Create a Laravel route that maps to a controller action named "HomeController@index".

*/

class HomeController extends Controller
{
    /**
     * Display a listing of the posts.
     * It Also filter post by CATEGORY and by OPtional User/Author
     */
    public function index($category_id = null,)
     //Optional parameter:category_id 
    {
        $postscol = Post::with('author','category','tags');//remove N-1 issue

        if (!is_null($category_id)){

            $postscol =  $postscol
                ->where([
                'category_id'=> $category_id, // optional category parameter post
            ]);
        }

        return view('posts.latest', [

            'posts' => $postscol
                           ->latest()
                        //    ->orderBy('created_at', 'desc')
                           ->take(5)
                           ->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
