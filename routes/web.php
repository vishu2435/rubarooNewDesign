<?php

use Illuminate\Support\Facades\Auth;
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

    // $posts=DB::table('posts')
    //                 ->orderBy('created_at','desc')
    //                 ->take(6)
    //                 ->get();
    return view('welcome',['path'=>'/']);
})->name('/');
Route::get('/about',function(){
    return view('about',['path'=>'/about']);

})->name('about');




Route::get('/blog',[App\Http\Controllers\LoadPosts::class,'mypost'])->name('blog');
Route::get('/blog/{post}/{name}',[App\Http\Controllers\PostController::class,'show'])->name('blog.post');
Route::get('/blog/author/{id}/{name}',[App\Http\Controllers\PostController::class,'author'])->name('blog.author');

Auth::routes();


Route::middleware('auth')->group(function(){
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/post/create',[App\Http\Controllers\HomeController::class,'create'])->name('post.create');
    Route::get('/posts',[App\Http\Controllers\HomeController::class,'showPost'])->name('post.user');

    Route::post('/post/create',[App\Http\Controllers\HomeController::class,'store'])->name('post.store');
    Route::delete('/posts/{post}/delete',[App\Http\Controllers\HomeController::class,'destroy'] )->name('post.destroy');
    Route::patch('/posts/{post}/update',[App\Http\Controllers\HomeController::class,'update'] )->name('post.update');
    Route::get('/posts/{post}/update',[App\Http\Controllers\HomeController::class,'getUpdate'] )->name('post.getUpdate');

    Route::get('/categories',[App\Http\Controllers\HomeController::class,'showCategories'])->name('category.user');
    Route::get('/categories/create',[App\Http\Controllers\HomeController::class,'createCategory'])->name('category.create');
    Route::post('/categories/create',[App\Http\Controllers\HomeController::class,'storeCategory'])->name('category.store');
    Route::get('/categories/{category}/update',[App\Http\Controllers\HomeController::class,'getUpdateCategory'] )->name('category.getUpdate');
    Route::patch('/categories/{category}/update',[App\Http\Controllers\HomeController::class,'updateCategory'] )->name('category.update');


});
