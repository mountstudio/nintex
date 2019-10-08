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

Auth::routes();

Route::get('/profile', 'HomeController@index')->name('profile');

Route::put('/user/update/email', 'UserController@updateEmail')->name('user.update.email');
Route::put('/user/update/password', 'UserController@updatePassword')->name('user.update.password');
