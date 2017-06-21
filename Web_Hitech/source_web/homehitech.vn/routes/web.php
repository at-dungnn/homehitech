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
Auth::routes();

Route::prefix('admin')->group(function () {
	Route::get('/', 'DashboardControler@Index')->name('admin');
	// Route::get('login', 'AdminLoginController@Index')->name('admin.login');
	Route::get('product', 'ProductController@Index')->name('admin.product');
	Route::get('product/add', 'ProductController@getAdd')->name('admin.product.add');
	Route::post('product/add', 'ProductController@postAdd');
	Route::get('users', 'AccountController@Index')->name('admin.users');
});










Route::get('/home', 'HomeController@index')->name('home');
