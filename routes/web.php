<?php

Route::get('/example', 'FrontController@example')->name('example');

Route::get('/', 'FrontController@index')->name('index');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/select-shirt-type', 'FrontController@select_shirt_type')->name('select-shirt-type');
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
Route::resource('measurement','Auth\MeasurementController');
Route::resource('product','Auth\ProductsController');
Route::resource('category','Auth\CategoriesController', ['except' => ['create']]);
Route::resource('colour','Auth\ColoursController', ['except' => ['create']]);
Route::resource('size','Auth\SizeController', ['except' => ['create']]);



Route::resource('button','Auth\ButtonController', ['except' => ['create']]);
Route::resource('collarType','Auth\CollarTypeController', ['except' => ['create']]);
Route::resource('embroidery','Auth\EmbroideryController', ['except' => ['create']]);
Route::resource('fabric','Auth\FabricController', ['except' => ['create']]);
Route::resource('fitting','Auth\FittingController', ['except' => ['create']]);
Route::resource('pocketHankerchief','Auth\PocketHankerchiefController', ['except' => ['create']]);
Route::resource('pocket','Auth\PocketController', ['except' => ['create']]);
Route::resource('thread','Auth\ThreadController', ['except' => ['create']]);
Route::resource('zipperType','Auth\ZipperTypeController', ['except' => ['create']]);
Route::resource('sleeveAndCuff','Auth\sleeveAndCuffController', ['except' => ['create']]);
Route::resource('back','Auth\BackController', ['except' => ['create']]);
Route::resource('bottom','Auth\BottomController', ['except' => ['create']]);
Route::resource('placket','Auth\PlacketController', ['except' => ['create']]);
Route::resource('misc','Auth\MiscController', ['except' => ['create']]);


Route::resource('maleshirt','Auth\MaleShirtsController');






Auth::routes();

Route::get('/index', 'FrontController@index')->name('index');
//Route::get('/admin', 'AdminController@index')->name('admin.index');


Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/admin', 'Auth\AdminController@index')->name('admin.index');
  //Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  //Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  //Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  //Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  //::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

  Route::resource('/measure', 'VueMeasurementController');
});



Route::group(['middleware' => 'auth'], function(){

    Route::get('/shirt-design-details/{order_id}', [
        'uses' => 'ShirtController@index',
        'as' => 'shirt-design-details'
    ]);

    // Route::get('/makeshirts/example/{id}', [
    //    'uses' => 'ShirtController@edit',
    //    'as' => 'design'
    // ]);

    // Route::post('/makeshirts/update/profile', [
    //     'uses' => 'ShirtController@update',
    //     'as' => 'makeshirts.store'
    // ]);

});

Route::resource('choosefabric','FabricController');
Route::resource('shirt-design-details','ShirtController');


//Vue Resource Controllers
Route::resource('collars','CollarTypeController', ['except' => ['create']]);
Route::resource('sleeve_and_cuffs','SleeveAndCuffsController', ['except' => ['create']]);

// Route::get('miscs/miscitems', 'MiscController@miscItems');
Route::resource('miscs','MiscController');