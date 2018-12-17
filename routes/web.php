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
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('user', 'Admin\UserController');
    Route::resource('comment-mangement', 'Admin\CommentManagementController');
    Route::get('logout-admin', 'Admin\AdminController@logoutAdmin')->name('logout-admin');
});
Route::get('post-details-{post}', 'HomeController@showPost')->name('post-details');
Route::get('category-details-{category}', 'HomeController@showCategory')->name('category-details');
Route::post('comment', 'CommentController@storeComment')->name('comment');
Route::get('edit-profile-{id}', 'EditProfileController@index')->name('edit-profile');
Route::patch('edit-profile-update/{id}', 'EditProfileController@update')->name('edit_profile.update');
