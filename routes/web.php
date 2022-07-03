<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UPloadController;
use App\Http\Controllers\CommentController;
use App\Models\Photo;

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
    return view('welcome');
});
Route::resource('posts',PostController::class);

Route::resource('members',MemberController::class);
//Route::post('members/store',[MemberController::class,'store'])->name('members.store');

//Route::post('/posts/store',[PostController::class,'store'])->name('posts.store');

Route::get('/posts/show/{id}',[PostController::class,'show'])->name('post.show');
Route::get('/edit/{id}',[PostController::class,'edit'])->name('posts.edit');
Route::post('/posts/update/{id}',[PostController::class,'update'])->name('posts.update');
Route::get('/posts/{id}/comments',[CommentController::class,'addComment'])->name('comment.add');
Route::post('/posts/{id}/comments',[CommentController::class,'saveComment'])->name('comment.store');
Route::get('/comments',[CommentController::class,'index'])->name('comment.index');
Route::post('/comments/{id}',[CommentController::class,'update'])->name('comment.update');
Route::get('/comments/edit/{id}',[CommentController::class,'edit'])->name('edit.comment');
Route::get('/comments/delete/{id}',[CommentController::class,'destroy'])->name('delete.comment');
Route::get('/comments/deleteall',[CommentController::class,'deleteAll']);
Route::get('/posts/delete/{id}',[PostController::class,'destroy'])->name('delete.post');
Route::get('/upload',[UPloadController::class,'index'])->name('photo.view');
Route::post('/store',[UPloadController::class,'upload'])->name('file.store');
Route::get('/photo/{id}',[UPloadController::class,'show']);
Route::get('/photos/delete', function () {
    Photo::truncate();
});
Route::get('/show',[UPloadController::class,'showme']);