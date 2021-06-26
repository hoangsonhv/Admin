<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\CategoryController;
>>>>>>> up
use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

=======

Route::get("/",[ProductController::class,"list"]);
>>>>>>> up
Route::get("products",[ProductController::class,"list"]);
Route::get('products/themmoi',[ProductController::class,"add"]);
Route::post('save',[ProductController::class,"save"]);
Route::get('products/edit/{id}',[ProductController::class,"edit"]);
Route::post('products/update/{id}',[ProductController::class,"update"]);
Route::delete('products/delete/{id}',[ProductController::class,"destroy"]);

<<<<<<< HEAD
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
=======
Route::get("/",[CategoryController::class,"list"]);
Route::get("categories",[CategoryController::class,"list"]);
Route::get('categories/add',[CategoryController::class,"add"]);
Route::post('categories/save',[CategoryController::class,"save"]);
Route::get('categories/edit/{id}',[CategoryController::class,"edit"]);
Route::post('categories/update/{id}',[CategoryController::class,"update"]);
Route::delete('categories/delete/{id}',[CategoryController::class,"destroy"]);
>>>>>>> up
