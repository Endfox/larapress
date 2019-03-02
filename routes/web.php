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

Route::get('/','HomeController@home')->name('home');

Auth::routes();


Route::get('/larapress/admin','AdminController@loginForm');

Route::post('/larapress/admin','AdminController@loginValidation')->name('loginValidation');

Route::get('/larapress/admin/dashboard','AdminController@dashboard')->name('dashboardAdmin');