<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("products",[ProductController::class,"list"]);
Route::get('products/themmoi',[ProductController::class,"add"]);
Route::post('products/save',[ProductController::class,"save"]);
Route::get('/products/edit/{id}',[ProductController::class,"edit"]);
Route::post('products/update/{id}',[ProductController::class,"update"]);
Route::delete('products/delete/{id}',[ProductController::class,"destroy"]);
