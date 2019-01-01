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

Route::get('/', 'PageController@index');
Route::get('/form', 'PageController@form');
Route::get('/payments', 'PageController@payments');
Route::get('/buy', 'PageController@buy');
Route::post('/charge', 'StripeController@charge');
Route::post('/save', 'StripeController@save');


Auth::routes();
