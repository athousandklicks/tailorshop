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
Route::get('/design-shirts', 'FrontController@design_shirts')->name('design-shirts');
Route::get('/design-pants', 'FrontController@design_pants')->name('design-pants');
Route::get('/suit-jackets', 'FrontController@suit_jackets')->name('suit-jackets');
Route::get('/dresses-skirts', 'FrontController@dresses_skirts')->name('dresses-skirts');
Route::get('/design-dresses', 'FrontController@design_dresses')->name('design-dresses');
Route::get('/accessories', 'FrontController@accessories')->name('accessories');
Route::get('/shop', 'FrontController@shop')->name('shop');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/user_login', 'FrontController@user_login')->name('user_login');

Route::get('/design-options', 'FrontController@design_options')->name('design-options');
Route::get('/suite-home', 'FrontController@suite_home')->name('suite-home');
Route::get('/male-suite', 'FrontController@male_suite')->name('male-suite');
Route::get('/female-suite', 'FrontController@female_suite')->name('female-suite');
Route::get('/male-jacket', 'FrontController@male_jacket')->name('male-jacket');
Route::get('/female-jacket', 'FrontController@female_jacket')->name('female-jacket');

Route::get('/shirts-home', 'FrontController@shirts_home')->name('shirts-home');
Route::get('/male-shirts', 'FrontController@male_shirts')->name('male-shirts');
Route::get('/female-shirts', 'FrontController@female_shirts')->name('female-shirts');

Route::get('/trousers-home', 'FrontController@trousers_home')->name('trousers-home');
Route::get('/male-trousers', 'FrontController@male_trousers')->name('male-trousers');
Route::get('/female-trousers', 'FrontController@female_trousers')->name('female-trousers');








Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirt', 'FrontController@shirt')->name('shirt');

/*
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

	Route::get('/', function () {
		return view('front.home');
	})->name('index');
});
*/
Route::resource('measurement','MeasurementController');
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
Route::resource('sleeveAndCuff','sleeveAndCuffController', ['except' => ['create']]);
Route::resource('back','BackController', ['except' => ['create']]);
Route::resource('bottom','BottomController', ['except' => ['create']]);
Route::resource('placket','PlacketController', ['except' => ['create']]);


Route::resource('maleshirt','MaleShirtsController');



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