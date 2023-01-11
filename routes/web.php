<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('books', [BookController::class, 'index'])->name('books');
Route::put('books/add', [BookController::class, 'store'])->name('books.add');
// Route::get('show/{$id}', [BookController::class, 'show'])->name('show');
// Route::get('show/{$id}', 'BookController@show')->name('show');
Route::get('show/{slug}', [BookController::class, 'show']);
Route::get('destroy/{postId}', [BookController::class, 'destroy']);

Route::get('create', [BookController::class, 'create'])->name('create');
Route::post('store', [BookController::class, 'store'])->name('store');
Route::get('edit/{id}', [BookController::class, 'edit']);
Route::post('update',[BookController::class, 'update'])->name('books.update');
// Route::get('books','BookController@index');
