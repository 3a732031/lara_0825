<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
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
    //return view('welcome');

//    $post=new Post();//先產生Post的物件$post，$post代表posts資料表的一篇貼文
//    $post->title='test title';//指定貼文的title
//    $post->content='text content';//指定貼文的content
//    $post->save();

//    Post::create([
//       'title'=>'test title2',
//        'content'=>'test content2'
//    ]);

    $posts=Post::all();//取出posts資料表所有貼文
    dd($posts);
});
Route::get('posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('post', [PostsController::class, 'show'])->name('posts.show');
Route::get('contact', [PostsController::class, 'contact'])->name('posts.contact');
Route::get('about', [PostsController::class, 'about'])->name('posts.about');
