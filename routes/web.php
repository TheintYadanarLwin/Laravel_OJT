<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::resource('posts', PostController::class);


// Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
// Route::post('/posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
// Route::get('/posts/show', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
// Route::get('/posts/update', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
// Route::get('/posts/destroy', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');


