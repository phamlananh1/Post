<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => ''], function () {
    Route::get('/posts', 'PostApiController@getAll')->name('posts.all');
    Route::get('/posts/{postsId}', 'PostApiController@show')->name('posts.show');
    Route::post('/posts', 'PostApiController@store')->name('posts.store');
    Route::put('/posts/{postsId}', 'PostApiController@update')->name('posts.update');
    Route::delete('/posts/{postsId}', 'PostApiController@destroy')->name('posts.destroy');
});
