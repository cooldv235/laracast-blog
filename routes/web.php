<?php

use App\Models\Post;
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
    return view('posts',['posts' => Post::all()]);
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

Route::get('posts/{post}', function ($slug) {
    // Find a post by its slug and pass it to the view
    $post = Post::find($slug);

    return view('post',[
        'post' => $post
    ]);
});
