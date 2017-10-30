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

Route::group(['namespace' => 'Backend'],function() {
    Route::get('/nhomkinhadmin', 'HomeController@index')->name('admin.index');
    Route::resource('news', 'NewsController');
});
