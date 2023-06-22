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

Route::get('/', function () {
    return view('index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('dashboard/post/create', [PostController::class, 'create'])->name('createpost');
    Route::post('dashboard/post/store', [PostController::class, 'store'])->name('storepost');
    Route::resource('tags', TagController::class)->except(['show']);
});



Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/latestposts/{category_id?}', [HomeController::class, 'index'])->name('index'); // id is the category ID
    Route::get('/posts', [PostController::class, 'index'])->name('allposts');
    Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('postdetails');

});


// Route::middleware('admin')->group(function () {    
//     Route::get('dashboard/post/create', [PostController::class, 'create'])->name('createpost');
//     Route::post('dashboard/post/store', [PostController::class, 'store'])->name('storepost');
//     Route::resource('tags', TagController::class)->except(['show']);

// });








Route::get('categories/{category}',function(Category $category){
    return view('postsbycategory',[

        'posts'=>$category->post,
        'category' => $category,
        //'categories' => Category::all(),
    ]);
    
})->name('postsbycategory');


Route::get('authors/{author}',function(User $author){

    return view('postsbyauthor',[
        'posts'=> $author->post,
       'author' => $author,
        
    ]);
})->name('postbyauthor');



require __DIR__.'/auth.php';