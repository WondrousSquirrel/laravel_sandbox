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

Route::get('/', 'user\HomeController@index')->name('blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('send/', 'MailController@send');

// Admin login

Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
});


// Amind Group Route
Route::group(['middleware' => 'is_admin', 'namespace' => 'Admin'], function(){
    // Home Route
    Route::get('admin/home', 'HomeController@index')->name('admin.home');
    // resource значит CRUD
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/category', 'CategoryController');
    Route::resource('admin/tag', 'TagController');

});
