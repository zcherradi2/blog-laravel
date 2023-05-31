<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blogs',[BlogController::class,'index'])->name("blogs.index");

Route::get('/blogs/{blog}',[BlogController::class,'show'])->name("blogs.show");

Route::post('/comment',[CommentController::class,'store'])->name('comment.store');

Route::post('/comments/{comment}/like', [CommentController::class,'like'])->name('comments.like');