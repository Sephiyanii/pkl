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
    return view('index');
});
Route::get('gallery', function () {
    return view('gallery');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('archive-grid', function () {
    return view('archive-grid');
});

Route::get('archive-list', function () {
    return view('archive-list');
});

Route::get('single-post', function () {
    return view('single-post');
});

Route::get('typography', function () {
    return view('typography');
});

Route::get('video-post', function () {
    return view('video-post');
});

Route::get('login', function () {
    return view('login');
});

Route::get('instagram', function () {
    return view('instagram');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/artikel', 'ArtikelController');
Route::resource('/admin/kategori', 'KategoriController');
