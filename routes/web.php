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
    return redirect('/home');
});

//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index/{id}/catagorysearch', 'HomeController@catagorysearch');
Route::post('/index/search', 'HomeController@search');
//Registration
Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@store');

//User Login
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
//Admin Login
Route::get('/adminlogin', 'AdminLoginController@index')->name('adminlogin.index');
Route::post('/adminlogin', 'AdminLoginController@verify');
//Logout
Route::get('/logout', 'LogoutController@index')->name('logout');


//Admin Middleware check
Route::group(['middleware' => ['adminsess']], function(){

//Admin Dashboard
Route::get('/admindashboard', 'AdminDashboardController@index')->name('admindashboard');
Route::get('/admindashboard/create', 'AdminDashboardController@create')->name('admindashboard.create');
Route::get('/admindashboard/userindex', 'AdminDashboardController@userindex')->name('admindashboard.userindex');
Route::post('/admindashboard/userSearch','AdminDashboardController@userSearch');
Route::post('/admindashboard', 'AdminDashboardController@store');

//Category
Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
// Route::get('/category/{id}', 'CategoryController@show');
// Route::get('/category/{id}/edit', 'CategoryController@edit');
// Route::get('/category/{id}/delete', 'CategoryController@delete');
Route::post('/category', 'CategoryController@store');
// Route::post('/category/search', 'CategoryController@search');
// Route::put('/category/{id}', 'CategoryController@update');
// Route::delete('/category/{id}', 'CategoryController@destroy');

//Product

Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::get('/product/productSold', 'ProductController@productSold')->name('product.productSold');
Route::get('/product/soldPendings', 'ProductController@soldPendings')->name('product.soldPendings');
Route::post('/product/searchSoldproduct','ProductController@searchSoldproduct');
Route::post('/product/searchSoldproductbyDate','ProductController@searchSoldproductbyDate');
Route::get('/product/{id}/searchByCatagorySoldproduct', 'ProductController@searchByCatagorySoldproduct');
Route::get('/product/{id}/edit', 'ProductController@edit');
Route::get('/product/{id}/statusUpdate', 'ProductController@statusUpdate');
Route::get('/product/{id}/delete', 'ProductController@delete');
Route::post('/product', 'ProductController@store');
Route::post('/product/search', 'ProductController@search');
Route::put('/product/{id}', 'ProductController@update');
Route::delete('/product/{id}', 'ProductController@destroy');
//Route::resource('/supplier', 'SupplierController');
//Route::get('/supplier/{id}/delete', 'SupplierController@delete');
});

//Cart
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart/addtocart','CartController@addtocart');
Route::get('/cart/removefromcart/{rowid}','CartController@destroy');


//User Middleware
Route::group(['middleware' => ['usersess']], function(){
	Route::get('/user/{id}/edit','UserController@edit');
	Route::get('/user/{id}/editPassword','UserController@editPassword');
	Route::get('/user/{id}/buyHistory','UserController@buyHistory');
	Route::get('/user/{id}/userOrderDetails','UserController@userOrderDetails');
	Route::put('/user/{id}', 'UserController@update');
	Route::put('/user/{id}/updatePassword', 'UserController@updatePassword');
	Route::group(['middleware' => ['cartverify']], function(){
	//Checkout
	Route::get('/checkout','CheckoutController@index')->name('checkout.index');
	Route::post('/checkout','CheckoutController@store')->name('checkout.store');
	});

	Route::get('/user/userProfile','UserController@userProfile');
});


//Product
Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/{id}', 'ProductController@show');
