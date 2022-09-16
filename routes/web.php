<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
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
// crud routes for section 
Route::resource('products', ProductController::class);
// softdelete products to be in trash
Route::get('products.softdelete.{id}', [ProductController::class, 'softDelete'])->name('softdelete');
//go to trash page
Route::get('products.trash', [ProductController::class, 'trash'])->name('trash');
//restore the delete row
Route::get('products.restore.{id}', [ProductController::class, 'restore'])->name('restore');
//delete from trash table
Route::get('products.delete.{id}', [ProductController::class, 'hardDelete'])->name('harddelete');




Auth::routes();
