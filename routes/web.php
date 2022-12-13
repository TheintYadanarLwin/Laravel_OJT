<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
    return redirect('/home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route For Register And Login
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('createlogin', [AuthController::class, 'login'])->name('auth.login');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'register'])->name('auth.register');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout')->middleware(['auth', 'verified']);

//Update user profile 
Route::middleware(['auth'])->group(function () {
    Route::get('user/edit',[AuthController::class,'profile'])->name('auth.profile');
    Route::put('user/{user}',[AuthController::class,'updateUser'])->name('auth.update');
    Route::get('/change-password', [AuthController::class, 'changePassword'])->name('auth.change-password');
    Route::post('/change-password', [AuthController::class, 'updatePassword'])->name('auth.update-password');
  });

//Route for Posts
Route::middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/create', [PostController::class, 'getAllCategories'])->name('posts.create');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    //CSV Export For Post
    Route::get('/export-post', [PostController::class, 'exportPost'])->name('export-post');
    //CSV Import For Post
    Route::post('/import-post', [PostController::class, 'importPost'])->name('import-post');
});

//Route for Categories
Route::middleware('auth')->group(function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

