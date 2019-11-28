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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return 'Contact!';
})->name('contact');


Route::get('/producten', 'ProductController@index')->name('producten');
Route::get('/producten/{id}', 'ProductController@showProduct')->name('product');


Route::get('/dit/is/een/lange-url/zeg', 'PageController@longUrl')->name('page');
Route::redirect('/korte-url', '/dit/is/een/lange-url/zeg')->name('kortere-url');


Route::get('/admin', 'AdminController@list')->name('admin');


Route::get('/blog/artikel/{artikel}', 'BlogController@showArtikel')->name('BlogArtikel');
