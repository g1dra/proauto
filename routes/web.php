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





