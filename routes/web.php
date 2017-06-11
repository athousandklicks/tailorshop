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


Route::get('/', 'FrontController@index')->name('index');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/women', 'FrontController@women')->name('women');
Route::get('/men', 'FrontController@men')->name('men');
Route::get('/accessories', 'FrontController@accessories')->name('accessories');
Route::get('/online_design', 'FrontController@online_design')->name('online_design');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/user_login', 'FrontController@user_login')->name('user_login');





Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirt', 'FrontController@shirt')->name('shirt');

/*
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

	Route::get('/', function () {
		return view('front.home');
	})->name('index');
});
*/

Route::resource('product','ProductsController');
Route::resource('category','CategoriesController', ['except' => ['create']]);
Route::resource('colour','ColoursController', ['except' => ['create']]);
Route::resource('size','SizeController', ['except' => ['create']]);


Route::resource('button','ButtonController', ['except' => ['create']]);
Route::resource('collarType','CollarTypeController', ['except' => ['create']]);
Route::resource('embroidery','EmbroideryController', ['except' => ['create']]);
Route::resource('fabric','FabricController', ['except' => ['create']]);
Route::resource('fitting','FittingController', ['except' => ['create']]);
Route::resource('pocketHankerchief','PocketHankerchiefController', ['except' => ['create']]);
Route::resource('pocket','PocketController', ['except' => ['create']]);
Route::resource('thread','ThreadController', ['except' => ['create']]);
Route::resource('zipperType','ZipperTypeController', ['except' => ['create']]);



Auth::routes();

Route::get('/index', 'FrontController@index')->name('index');
//Route::get('/admin', 'AdminController@index')->name('admin.index');


Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/admin', 'AdminController@index')->name('admin.index');
  //Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  //Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  //Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  //Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  //::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});