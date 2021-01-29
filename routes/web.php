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



Route::get('/', 'CarController@index');
Route::get('/fleet', 'CarController@fleet');
Route::get('/services', 'CarController@services');
Route::get('/fleet/{car}', 'CarController@show');
Route::get('/steps','CarController@steps');
Route::get('/steps/{id}','CarController@stepsCar');
Route::get('/contacts','CarController@contacts');
Route::get('/long-term','CarController@longTerm');
Route::get('/faq','CarController@faq');
Route::get('/rental-terms','CarController@rentalTerms');



Route::post('/send-mail','CarController@sendMail');
Route::post('/reservation','ReservationController@createReservation');
Route::get('/home', function () {
    return view('pages.home');
});

Route::post('/steps','ReservationController@orderForm');
Route::resource('posts', 'PostController');

Route::get('/about', function () {
    return view('about');
});


Route::resource('admin','AdminController');

Route::get('/home', 'HomeController@index')->name('home');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');