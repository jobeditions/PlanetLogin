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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('/admin')->group(function(){
Route::get('/home','AdminController@index')->name('admin.home')->middleware('auth');
Route::get('/login','Admin\LoginController@showLoginForm')->name('admin.login')->middleware('guest');
Route::post('/login','Admin\LoginController@login')->middleware('guest');
});
Route::post('/admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email')->middleware('guest');
Route::get('/admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request')->middleware('guest');
Route::post('/admin-password/reset','Admin\ResetPasswordController@reset')->middleware('guest');
Route::get('/admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset')->middleware('guest');

