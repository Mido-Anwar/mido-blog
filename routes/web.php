<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
// crud routes for product section
Route::resource('products', ProductController::class);
// softdelete products to be in trash
Route::get('products.softdelete.{id}', [ProductController::class, 'softDelete'])->name('softdelete');
//go to trash page
Route::get('products.trash', [ProductController::class, 'trash'])->name('trash');
//restore the delete row
Route::get('products.restore.{id}', [ProductController::class, 'restore'])->name('restore');
//delete from trash table
Route::get('products.delete.{id}', [ProductController::class, 'hardDelete'])->name('harddelete');


Route::get('profile',[ProfileController::class,'index'])->name('profile');
Route::put('profile.update',[ProfileController::class,'update'])->name('profile.update');

//route for post

Route::resource('posts', PostController::class);
Route::get('posts.softdelete.{id}', [PostController::class, 'softDelete'])->name('posts.softdelete');
Route::get('posts.restore.{id}', [PostController::class, 'restore'])->name('posts.restore');
Route::get('posts.delete.{id}', [PostController::class, 'hardDelete'])->name('posts.harddelete');
Route::get('posts.trash', [PostController::class, 'trash'])->name('posts.trash');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
