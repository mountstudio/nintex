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
})->name('home');
Route::get('/basket', function () {
    return view('basket');
})->name('basket');
Route::get('/korzina', function () {
    return view('korzina');
})->name('korzina');
Route::get('/cooperation', function () {
    return view('cooperation');
})->name('cooperation');
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Auth::routes();

// Profile Routes
Route::get('/profile', 'HomeController@index')->name('profile');
Route::put('/user/update/email', 'UserController@updateEmail')->name('user.update.email');
Route::put('/user/update/password', 'UserController@updatePassword')->name('user.update.password');
Route::get('/profile/favorites', 'UserController@favorites')->name('user.favorites');
Route::get('/profile/shopping', 'UserController@shopping')->name('user.shopping');
// End Profile Routes

// Resourse Routes
Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
Route::resource('size', 'SizeController');
Route::resource('comment', 'CommentController');
// End Resource Routes

