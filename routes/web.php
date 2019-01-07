<?php

Auth::routes();

Route::get('/closesession', function() {
    Auth::logout();
    return redirect('/login');
});

/* Products */

Route::group([
    'middleware' => 'auth'],
    function(){

        Route::get('/dashboard', 'HomeController@index')->name('dashboard');
        Route::get('/list', 'ProductsController@productList');
        Route::get('/edit/{id}', 'ProductsController@edit');
        Route::resource('/', 'ProductsController');
        Route::get('/update/{id}', 'ProductsController@update');
        Route::get('/delete/{id}', 'ProductsController@destroy');
        Route::get('/show/', 'ProductsController@show');
        Route::get('/products', 'ProductsController@products')->name('products');

    });


/* Users */

Route::group([
    'middleware' => 'rol'],
    function(){

        Route::resource('/users/list', 'UsersController');
        Route::get('/users/create', 'UsersController@create');
        Route::get('/users/edit/{id}', 'UsersController@edit');
        Route::get('/users/update/{id}', 'UsersController@update');
        Route::get('/users/destroy/{id}', 'UsersController@destroy');
        Route::get('/users', 'UsersController@users')->name('users');

    });

Route::get('/', 'HomeController@view');
