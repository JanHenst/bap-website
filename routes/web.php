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

Route::get('/', 'HomeController@index')->name('homepage');


Route::get('/producten', 'ProductController@index')->name('product.list');
Route::get('/producten/{id}', 'ProductController@details')->name('product.details');

Route::prefix('/admin')->middleware('auth')->group(function() {
  Route::get('/producten/add', 'ProductController@create')->name('add_products');
  Route::post('/producten/add', 'ProductController@store')->name('store_products');
  Route::get('/blogs/add', 'BlogController@create')->name('add_blogs');
  Route::post('/blogs/add', 'BlogController@store')->name('store_blogs');
});


Route::get('/blogs', 'BlogController@index')->name('blog.list');
Route::get('/blogs/{id}', 'BlogController@details')->name('blog.details');


Auth::routes();
