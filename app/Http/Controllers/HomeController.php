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

    //Optional paramr
     // 1. category_id   : you can filter all posts  and by for perticular category if category parameter is specifiedd 

    {
        $postscol = Post::with('author','category','tags');

        if (!is_null($category_id)){//if there is optional category parameter

            $postscol =  $postscol
                ->where([
                'category_id'=> $category_id, // optional category parameter post
        
            ]);
            // dd($postscol->count());
        }

        return view('latestposts', [

            'posts' => $postscol
                           ->latest()
                           ->take(5)
                           ->get(),

        ]);
    }


    // public function index($id)

    // {

    //     return view('latestposts', [
            
    //         'posts' => Post::where('id', $id)->get(),
            
    //     ]);
    // }





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
