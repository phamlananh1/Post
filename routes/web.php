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



Auth::routes();
Route::get('/', 'HomeController@index')->name('posts');

Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/list', 'PostController@list')->name('posts.lists');
        Route::get('/create','PostController@create')->name('posts.creates');
        Route::post('/create','PostController@store')->name('posts.store');
        Route::get('/{id}/edit','PostController@edit')->name('posts.edit');
        Route::post('/{id}/edit','PostController@update')->name('posts.update');
        Route::get('/{id}/destroy','PostController@destroy')->name('posts.destroy');
        Route::get('/{id}/show','PostController@show')->name('posts.show');
    });
});

