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

Route::get('/', 'HomeController@showHome')->name('homepage');
Route::get('/hallo/{name}', 'HomeController@showName')->name('show-name');


Route::get('/contact', function () {
    return 'Contact!';
})->name('contact');



Route::get('/producten', 'ProductController@index')->name('producten');
Route::get('/producten/{id}', 'ProductController@showProduct')->where('id', '[0-9]+');



Route::get('/producten/add', 'ProductController@create')->name('add_products');
Route::post('/producten/add', 'ProductController@store')->name('store_products');



Route::prefix('admin')->group(function() {
  Route::get('users', function() { return 'admin users'; });
  Route::get('products', function() { return 'admin products'; });
  Route::get('categories', function() { return 'admin categories'; });
});



Route::get('/dit/is/een/lange-url/zeg', 'PageController@longUrl')->name('page');
Route::redirect('/korte-url', '/dit/is/een/lange-url/zeg')->name('kortere-url');



Route::get('/admin', 'AdminController@list')->name('admin');



Route::get('/blog/artikel/{artikel}', 'BlogController@showArtikel')->where('artikel', '[A-Za-z]+');



Route::get('/mijn-account', 'AccountController@view')->name('account');
Route::get('/mijn-account/bestellingen/{bestelling?}', 'AccountController@bestelling')->name('account_bestellingen');
Route::get('/mijn-account/instellingen', 'AccountController@instelling')->name('account_instellingen');



Route::get('/bedrijven', 'CompanyController@list')->name('companies');
Route::get('/bedrijven/{id}', 'CompanyController@details')->name('company');
