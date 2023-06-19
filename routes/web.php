<?php

use Illuminate\Support\Facades\Route;
//use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',function(User $author){
    // dd($author);
    //$posts = $author->post();
 
   // dd('TEst'.$posts->count());
 
     return  ['Test'=>"Yashio Kenya HOME . Please check  route '/latestposts'  ",
    'Que'=>''];
 });





Route::get('/posts/{category_id}/{author_id?}', [HomeController::class, 'index'])->name('index'); // id is the category ID





Route::get('/posts', [PostController::class, 'index'])->name('home');


Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('postdetails');

Route::get('categories/{category}',function(Category $category){
    return view('categoriesposts',[

        'posts'=>$category->post,
        'category' => $category,
        //'categories' => Category::all(),
    ]);
})->name('categoryposts');


Route::get('authors/{author}',function(User $author){
   // dd($author);
   //$posts = $author->post();

  // dd('TEst'.$posts->count());

    return view('postsbyauthor',[
        'posts'=> $author->post,
       'author' => $author,
        
    ]);
});
