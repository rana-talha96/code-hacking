<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');

// Route::group(['middleware'=>'admin'], function(){
    Route::resource('admin/users', AdminUserController::class);
    Route::resource('admin/posts', PostController::class);
    Route::resource('admin/categories', CategoriesController::class);
    Route::get('admin/photo', [PhotoController::class, 'index'])->name('photos.index');
// });
