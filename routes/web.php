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

Auth::routes();

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/product', 'ProductController@datatable')->name('product.datatable');
    Route::get('/product/datatable', 'ProductController@datatableData')->name('product.datatable.data');
    Route::resource('product', 'ProductController')->except(['index', 'show']);
    Route::get('/category', 'CategoryController@datatable')->name('category.datatable');
    Route::get('/category/datatable', 'CategoryController@datatableData')->name('category.datatable.data');
    Route::resource('category', 'CategoryController')->except(['index', 'show']);
    Route::resource('size', 'SizeController')->except(['index', 'show']);
    Route::resource('comment', 'CommentController')->except(['index', 'show']);
});
// End Admin Routes

// Profile Routes
Route::get('/profile', 'HomeController@index')->name('profile');
Route::put('/user/update/email', 'UserController@updateEmail')->name('user.update.email');
Route::put('/user/update/password', 'UserController@updatePassword')->name('user.update.password');
Route::get('/profile/favorites', 'UserController@favorites')->name('user.favorites');
Route::get('/profile/shopping', 'UserController@shopping')->name('user.shopping');
// End Profile Routes

// Resourse Routes
Route::resource('product', 'ProductController')->only(['index', 'show']);
Route::resource('category', 'CategoryController')->only(['index', 'show']);
Route::resource('size', 'SizeController')->only(['index', 'show']);
Route::resource('comment', 'CommentController')->only(['index', 'show', 'store']);
// End Resource Routes

//Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart/add/book', 'CartController@add')->name('cart.add');
Route::get('/cart/delete/book', 'CartController@delete')->name('cart.delete');
Route::get('/cart/remove/book', 'CartController@remove')->name('cart.remove');
//End Cart

Route::get('/products', 'Api\ProductController@index')->name('product.all');
