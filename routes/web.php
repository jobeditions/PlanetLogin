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
App::register('Gloudemans\Shoppingcart\ShoppingcartServiceProvider');
//This is to declare the Laravel Cart API-Do not change this route

Route::get('/', function () {
    return view('welcome');
});

   Auth::routes();

   Route::get('/home', 'HomeController@index')->name('home');
   Route::get('/utilisateur', 'HomeController@indexUser')->name('homeuser');

   Route::prefix('/panier')->group(function(){
   Route::post('/add/', 'ShopController@addItems')->name('cart.add');
   Route::get('/content/', 'ShopController@panier')->name('cart.panier');
   Route::get('/delete/{id}/', 'ShopController@deleteItems')->name('cart.delete');
   Route::get('/increment/{id}/{qty}', 'ShopController@increment')->name('cart.increment');
   Route::get('/decrement/{id}/{qty}', 'ShopController@decrement')->name('cart.decrement');
   });

   Route::prefix('/admin')->group(function(){
   Route::group(['middleware' => 'web'], function () {
   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('/', 'AdminController@index')->name('admin.dashboard');

   // Password reset routes
   Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
   Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
   Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
   });
   });
   
   Route::resource('abonnement','AbonnementController', ['except' => ['index']]);
   Route::resource('announces','AnnounceController', ['except' => ['index']]);
   


 