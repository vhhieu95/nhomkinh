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

Route::get('/home', function () {
    return view('frontend.home.index');
});

Route::get('/sanpham', function () {
    return view('frontend.products.index');
});

Route::get('chitiet-sanpham', function () {
    return view('frontend.products.show');
});

Route::get('duan', function () {
    return view('frontend.projects.index');
});

Route::get('chitiet-duan', function () {
    return view('frontend.projects.show');
});
Route::get('chitiet-tintuc', function () {
    return view('frontend.news.show');
});
Route::get('tintuc', function () {
    return view('frontend.news.index');
});
Route::get('lienhe', function () {
    return view('frontend.contact.index');
});

Route::get('gioithieu', function () {
    return view('frontend.about-us.index');
});
