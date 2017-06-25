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

// Route::get('/', function () {
//     return view('index','');
// });
Route::get('/', 'IndexController@getIndex');
Auth::routes();

Route::prefix('admin')->group(function () {
	Route::get('login', 'AdminLoginController@Index')->name('admin.login');
	Route::get('reset-password', 'AdminLoginController@getReset')->name('admin.reset');
	Route::get('/', 'DashboardControler@Index')->name('admin');	
	Route::get('product', 'ProductController@Index')->name('admin.product');
	Route::get('product/list', 'ProductController@getList')->name('admin.product.list');
	Route::get('product/add', 'ProductController@getAdd')->name('admin.product.add');
	Route::post('product/add', 'ProductController@postAdd')->name('admin.product.postadd');
	Route::get('product/edit/{id}', 'ProductController@getEdit')->name('admin.product.edit');
	Route::post('product/edit/{id}', 'ProductController@postEdit')->name('admin.product.postedit');
	Route::post('product/delete', 'ProductController@postDelete')->name('admin.product.delete');

	Route::get('category', 'CategoryController@Index')->name('admin.category');
	Route::get('category/add', 'CategoryController@getAdd')->name('admin.category.add');
	Route::post('category/add', 'CategoryController@postAdd');
	Route::get('category/edit/{id}', 'CategoryController@getEdit')->name('admin.category.edit');
	Route::post('category/edit/{id}', 'CategoryController@postEdit')->name('admin.category.postedit');
	Route::get('category/list', 'CategoryController@getList')->name('admin.category.list');
	Route::post('category/delete', 'CategoryController@postDelete')->name('admin.category.delete');

	Route::get('users', 'AccountController@Index')->name('admin.users');
	Route::get('users/list', 'AccountController@getList')->name('admin.users.list');
	Route::get('users/list-all', 'AccountController@getListAll')->name('admin.users.list-all');
	Route::post('users', 'AccountController@postUpdate');
	Route::get('users/add', 'AccountController@getAdd')->name('admin.users.add');
	Route::post('users/add', 'AccountController@postAdd');
	Route::post('users/delete', 'AccountController@postDelete')->name('admin.users.delete');

	Route::get('contact', 'ContactController@Index')->name('admin.contact');
	Route::post('contact', 'ContactController@postUpdate')->name('admin.update');

});

Route::get('/home', 'HomeController@index')->name('home');
