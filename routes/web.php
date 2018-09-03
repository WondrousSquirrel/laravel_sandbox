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

// Amind Group Route
Route::group(['middleware' => 'is_admin', 'namespace' => 'Admin'], function(){
    // Home Route
    Route::get('admin/home', 'HomeController@index')->name('admin.home');
    Route::get('admin/post', 'PostController@index')->name('admin.post');
});
