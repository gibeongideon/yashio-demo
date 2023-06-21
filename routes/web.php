<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Category;

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

// Route::get('/', function () {
//     return view('index');
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin/post/create', [PostController::class, 'create'])->name('createpost');//->middleware('admin');
    Route::post('admin/post/store', [PostController::class, 'store'])->name('storepost');
});


require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/posts/{category_id?}', [HomeController::class, 'index'])->name('index'); // id is the category ID


// Route::get('/posts', [PostController::class, 'index'])->name('home');



Route::get('post/{post:slug}', [PostController::class, 'show'])->name('postdetails');

Route::get('categories/{category}',function(Category $category){
    return view('postsbycategory',[

        'posts'=>$category->post,
        'category' => $category,
        //'categories' => Category::all(),
    ]);
    
})->name('postsbycategory');


Route::get('authors/{author}',function(User $author){
   // dd($author);
   //$posts = $author->post();

  // dd('TEst'.$posts->count());

    return view('postsbyauthor',[
        'posts'=> $author->post,
       'author' => $author,
        
    ]);
});

