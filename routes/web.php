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
   Route::post('/add/abonnement', 'ShopController@addAbonnement')->name('cart.add');
   Route::post('/add/', 'ShopController@addAnnounce')->name('cart.announce');
   Route::get('/content/', 'ShopController@panier')->name('cart.panier');
   Route::post('/rapid', 'ShopController@rapid_abonnement')->name('cart.rapid');
   Route::get('/rapidadd/', 'ShopController@rapid_announce')->name('cart.rapidannounce');
   Route::get('/delete/{id}/', 'ShopController@deleteItems')->name('cart.delete');
   Route::get('/increment/{id}/{qty}', 'ShopController@increment')->name('cart.increment');
   Route::get('/decrement/{id}/{qty}', 'ShopController@decrement')->name('cart.decrement');
   });
   Route::get('paiement/content/', 'CheckoutController@index')->name('checkout.panier');
   Route::post('paiements/panier/', 'CheckoutController@pay')->name('cart.checkout');
   Route::post('/checkout_process', 'CheckoutController@checkout_process');
   Route::get('articles/content/{id}', 'PageController@show')->name('articles.show');
   Route::get('articlesann/content/{id}', 'PageController@ann_show')->name('articles_ann.show');
   
   
   //Controllers accessible only to Admins
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
   
   //Controllers accessible only to Admins
   Route::prefix('/admin')->group(function(){
   Route::group(['middleware' => 'web'], function () {
   Route::resource('abonnement','AbonnementController',['except' => ['show']]);
   Route::get('/abonnements/modification','AbonnementController@index_modify')->name('abonnement.modification');
   Route::get('/abonnements/corbeille','AbonnementController@trash')->name('abonnement.corbeille');
   Route::delete('/abonnements/restaurer/{id}','AbonnementController@restoretrash')->name('abonnement.restore');
   Route::delete('/abonnements/kill/{id}','AbonnementController@kill')->name('abonnement.kill');
   Route::resource('announces','AnnounceController',['except' => ['show']]);
   Route::resource('site_web','WebsiteController');
   Route::resource('categories','CategoryController',['except' => ['create','show']]);
   Route::get('/categorie/corbeille','CategoryController@trash')->name('categorie.corbeille');
   Route::delete('/categorie/restaurer/{id}','CategoryController@restoretrash')->name('categorie.restore');
   Route::delete('/categorie/kill/{id}','CategoryController@kill')->name('categorie.kill');
   });
   });
   


 