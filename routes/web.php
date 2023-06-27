<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/latestposts/{category_id?}', [HomeController::class, 'index'])->name('posts.latest'); // id is the category ID
Route::get('/posts', [PostController::class, 'index'])->name('posts.all');//remame to all to be explicit
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('dashboard/post/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('dashboard/post/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('dashboard/post/create', [PostController::class, 'create'])->name('posts.create');

// Route::post('dashboard/post/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('dashboard/post/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('dashboard/post/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('dashboard/post/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


    Route::resource('tags', TagController::class)->except(['show']);

    
});



// Route::middleware('admin')->group(function () {    
//     Route::get('dashboard/post/create', [PostController::class, 'create'])->name('createpost');
//     Route::post('dashboard/post/store', [PostController::class, 'store'])->name('storepost');
//     Route::resource('tags', TagController::class)->except(['show']);

// });


Route::get('categories/{category}',function(Category $category){
    
    return view('posts.categories.show',[

        'posts'=> $category->posts->load(['author','category',]),//eager load
        'category' => $category,
    ]);
    
})->name('posts.categories.show');


Route::get('authors/{author}',function(User $author){

    return view('postsbyauthor',[
        'posts'=> $author->post,
       'author' => $author,
        
    ]);
})->name('posts.author.show');



require __DIR__.'/auth.php';