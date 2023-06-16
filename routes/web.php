<?php

use App\Http\Controllers\IndexController;
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

Route::get('/posts', [IndexController::class, 'index'])->name('post.index');
Route::get('/posts/{post}', [IndexController::class, 'post'])->name('posts.show');
Route::get('/about', [IndexController::class, 'about'])->name('about.show');




