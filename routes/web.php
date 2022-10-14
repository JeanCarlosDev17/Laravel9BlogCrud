<?php

use App\Http\Controllers\PostController;
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

Route::view('/', 'home')->name('home');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('/blog', [PostController::class,'index'])->name('blog');
//Route::resource('/blog',PostController::class);
Route::get('/blog/post/create',[PostController::class,'create'])->name('createPost');
Route::post('/blog/post',[PostController::class,'store'])->name('storePost');
Route::get('/blog/view/{post}',[PostController::class,'show'])->name('showPost');
Route::get('/blog/edit/{post}',[PostController::class,'edit'])->name('post.edit');
Route::patch('/blog/update/{post}',[PostController::class,'update'])->name('post.update');

