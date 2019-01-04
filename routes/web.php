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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/list', 'ProductsController@index')->middleware('auth');
Route::get('/edit/{id}', 'ProductsController@edit')->middleware('auth');


Route::resource('/', 'ProductsController');

Route::get('/update/{id}', 'ProductsController@update');
Route::get('/delete/{id}', 'ProductsController@destroy');
Route::get('/show/', 'ProductsController@show')->middleware('auth');

Route::get('/closesession', function() {
    Auth::logout();
    return redirect('/login');
});

Route::get('/products', 'ProductsController@products')->name('products')->middleware('auth');


Route::resource('/users', 'UsersController');