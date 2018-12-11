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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'as' => 'admin'], function(){
    Route::get('', 'Admin\AdminController@index');
    Route::resource('post', 'Admin\PostController');
});
Route::get('post-details-{post}', 'HomeController@showPost')->name('post-details');
Route::get('category-details-{category}', 'HomeController@showCategory')->name('category-details');
Route::post('comment', 'CommentController@storeComment')->name('comment');
