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


Route::get('/', 'FrontController@index')->name('home');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/women', 'FrontController@women')->name('women');
Route::get('/men', 'FrontController@men')->name('men');
Route::get('/accessories', 'FrontController@accessories')->name('accessories');
Route::get('/online_design', 'FrontController@online_design')->name('online_design');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/user_login', 'FrontController@user_login')->name('user_login');





Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirt', 'FrontController@shirt')->name('shirt');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

	Route::get('/', function () {
		return view('admin.index');
	})->name('admin.index');
});


    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController', ['except' => ['create']]);
    Route::resource('colour','ColoursController', ['except' => ['create']]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
