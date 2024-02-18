<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/user', [AdminController::class, 'user'])->name('user');
Route::get('/single-post/{post_id}', [FrontendController::class, 'single_post'])->name('single');

//CATEGORY
Route::group(['prefix' => 'category'], function(){
    Route::get('/', [CategoryController::class, 'add']);
    Route::post('/insert', [CategoryController::class, 'insert']);
    Route::get('/view', [CategoryController::class, 'view'])->name('category.view');
    Route::get('/edit/{category_id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update', [CategoryController::class, 'update']);
    Route::get('/delete/{category_id}', [CategoryController::class, 'delete'])->name('category.delete');
});



//POST
Route::group(['prefix' => 'post'], function(){
    Route::get('/', [PostController::class, 'add']);
    Route::post('/insert', [PostController::class, 'insert']);
    Route::get('/view', [PostController::class, 'view'])->name('post.view');
    Route::get('/edit/{post_id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/update', [PostController::class, 'update']);
    Route::get('/delete/{post_id}', [PostController::class, 'delete'])->name('post.delete');
});
