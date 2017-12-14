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
Route::get('/test', 'HomeController@index')->name('test');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/administracion', 'Admin\AdminController@index')->name('home');
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
  Route::resource('/almacen', 'Admin\\AlmacenController');
});



Route::group(['prefix' => 'person'], function () {
  Route::get('/login', 'PersonAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'PersonAuth\LoginController@login');
  Route::post('/logout', 'PersonAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'PersonAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'PersonAuth\RegisterController@register');

  Route::post('/password/email', 'PersonAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'PersonAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'PersonAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'PersonAuth\ResetPasswordController@showResetForm');
});
