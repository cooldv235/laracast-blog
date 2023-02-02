<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // DB::listen(function($query){
    //     logger($query->sql);
    // });

    // return view('posts',['posts' => Post::all()]);
    return view('posts',[
        'posts' => Post::latest()->get(), // To solve the N+1 problem
        'categories' => Category::all()
    ]);
});

// Route::get('posts/{post}', function ($slug) {
//     if(!file_exists($path =  __DIR__."/../resources/posts/{$slug}.html")){
//         abort(404);
//     }

//     // $post = file_get_contents($path);

//     // $post = cache()->remember("posts.{$slug}",1500,function() use($path) {
//     //     return file_get_contents($path);
//     // });

//     // Or use arrow function 
//     $post = cache()->remember("posts.{$slug}",1200,fn() => file_get_contents($path));

//     return view('post',['post' => $post]);
// });

// Route::get('posts/{post}', function ($id) {
//     // Find a post by its id and pass it to the view

//     return view('post',[
//         'post' => Post::findOrFail($id)
//     ]);
// });


// Route::get('posts/{post}', function (Post $post) {  // By default laravel automatically searchs by ID using Eloquent Model
//     return view('post',[
//         'post' => $post
//     ]);
// });
 
// But, if we want to search anything else other than ID, then we can mention the exact same name of 
// DB column like this {post:slug}
Route::get('posts/{post:slug}', function (Post $post) {  // Now laravel searched using slug instead of ID
    return view('post',[
        'post' => $post
    ]);
});

// Posts of a category
Route::get('categories/{category:slug}', function (Category $category) {  // Now laravel searched using slug instead of ID
    return view('posts',[
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('authors/{author:username}', function (User $author) {  // Now laravel searched using slug instead of ID
    return view('posts',[
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});
