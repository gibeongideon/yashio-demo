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
    public function index($category_id,$author_id = null,)


    //Optional parameters
     // 1. author_id   : you can filter all posts for perticular category with specific author/user
     // CAN ADD MORE OPTIONAL PARAMETERS 


    {
   
        $postscol = Post::where([
            'category_id'=> $category_id
        ]);

        if (!is_null($author_id)){//if there is optional parameter

            $postscol =  $postscol
                ->where([
                'category_id'=> $category_id,
                'user_id' => $author_id, // optional parameter post
        
            ]);
            // dd($postscol->count());
        }

        // TODO refactor above code /It look messy and long!

        return view('latestposts', [

            'posts' => $postscol
                           ->latest()
                           ->with('author')
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
