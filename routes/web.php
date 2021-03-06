<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\Comment;
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

//    $posts=Post::all();//取出posts資料表所有貼文
//    dd($posts);

//    $post=Post::find(1);//找尋posts資料表id=1的貼文
//    dd($post);

//    $posts=Post::where('id','<',10)->orderBy('id','DESC')->get();//查詢符合條件的貼文，排序後，取出
//    dd($posts);

//    $post=Post::find(1);
//    $post->update([
//       'title'=>'updated title',
//       'content'=>'updated content',
//    ]);

//    $post=Post::find(1);
//    $post->title='saved title';
//    $post->content='saved content';
//    $post->save();

//    $post=Post::find(1);//使用 delete方法
//    $post->delete();

//    Post::destroy(2);//使用destroy方法

//    Post::destroy(3, 5, 7);//刪除多筆資料

//    //多筆貼文的集合
//    $allPosts=Post::all();
//    dd($allPosts);

//    $featuredPosts=Post::where('is_feature',1)->get();
//    dd($featuredPosts);

//    //Model查詢回傳單一筆貼文
//    $fourthPost=Post::find(4);
//    dd($fourthPost);

//    //Model查詢最後一筆貼文
//    $lastPost=Post::orderBy('id','DESC')->first();
//    dd($lastPost);

    //建立Post與Comment的關係(1:n) 透過關聯將資料印出來
//    $post=Post::find(1);
//    foreach ($post->comments as $comment){
//        echo $comment->content.'<br>';
//    }

    //透過post()關係，擷取posts資料(補充)
    $comment=Comment::find(1);
    echo $comment->content.'<br>';
    $post=$comment->post;
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->content.'<br>';
});
Route::get('posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('post', [PostsController::class, 'show'])->name('posts.show');
Route::get('contact', [PostsController::class, 'contact'])->name('posts.contact');
Route::get('about', [PostsController::class, 'about'])->name('posts.about');
