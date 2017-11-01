<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Backend', 'prefix' => 'nhomkinhadmin', 'middleware' => 'auth'],function() {
	Route::get('/home', 'HomeController@index')->name('admin.index');
	Route::resource('/users', 'UserController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');
    Route::resource('/image', 'ImageController', ['only' => ['destroy']]);
    Route::resource('news', 'NewsController');
    Route::resource('projects', 'ProjectController');
    Route::resource('introduces', 'IntroduceController');
    Route::resource('contacts', 'ContactController', ['only' => [
        'index', 'show', 'destroy'
    ]]);
});

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('san-pham', 'ProductController@index');
    Route::get('san-pham/{slug}', 'ProductController@show')->name('san-pham.show');
});

Auth::routes();
