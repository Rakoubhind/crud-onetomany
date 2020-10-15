<?php

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

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Home', 'ProductController@home');

Route::get('/createcat', 'CategoryController@index');
Route::get('/categories', 'CategoryController@index1');
Route::get('/createar', 'ProductController@index');

Route::post('/category/store', 'CategoryController@store')->name("category.store");
Route::post('/product/store', 'CategoryController@store')->name("product.store");
Route::get('/cat/delete/{id}', 'CategoryController@destroy')->name("cat.delete");
Route::get('/categories/edit:{id}', 'CategoryController@edit')->name("categorie.edit");






