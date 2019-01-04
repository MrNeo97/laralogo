<?php

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/closesession', function() {
    Auth::logout();
    return redirect('/login');
});

/* Products */

Route::get('/list', 'ProductsController@index')->middleware('auth');
Route::get('/edit/{id}', 'ProductsController@edit')->middleware('auth');

Route::resource('/', 'ProductsController');
Route::get('/update/{id}', 'ProductsController@update')->middleware('auth');
Route::get('/delete/{id}', 'ProductsController@destroy')->middleware('auth');
Route::get('/show/', 'ProductsController@show')->middleware('auth');


Route::get('/products', 'ProductsController@products')->name('products')->middleware('auth');

/* Users */

Route::resource('/users/list', 'UsersController')->middleware('auth');
Route::get('/users/create', 'UsersController@create')->middleware('auth');
Route::get('/users/edit/{id}', 'UsersController@edit')->middleware('auth');
Route::get('/users/update/{id}', 'UsersController@update')->middleware('auth');
Route::get('/users/destroy/{id}', 'UsersController@destroy')->middleware('auth');
Route::get('/users', 'UsersController@users')->name('users')->middleware('auth');