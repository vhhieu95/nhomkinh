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

Auth::routes();
Route::group(['namespace' => 'Frontend'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('san-pham', 'ProductController@index')->name('san-pham.index');
    Route::get('san-pham/{slug}', 'ProductController@show')->name('san-pham.show');
    Route::get('tin-tuc', 'NewsController@index')->name('tin-tuc.index');
    Route::get('tin-tuc/{slug}', 'NewsController@show')->name('tin-tuc.show');
    Route::resource('du-an', 'ProjectController')->only(['index', 'show']);
    Route::get('lien-he', 'ContactController@create')->name('lien-he.create');
    Route::post('lien-he', 'ContactController@store')->name('lien-he.store');
});
