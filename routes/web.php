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

Route::get('/larapress/admin','AdminController@loginForm')->name('loginForm');
Route::post('/larapress/admin','AdminController@loginValidation')->name('loginValidation');

Route::get('/larapress/admin/close','AdminController@closeSession')->name('adminClose');

Route::get('/larapress/admin/dashboard','AdminController@dashboard')->name('adminDashboard');

Route::get('/larapress/admin/pages','AdminController@pages')->name('adminPages');
Route::post('/larapress/admin/pages','AdminController@savePage')->name('savePage');

Route::get('/larapress/admin/users','AdminController@users')->name('adminUsers');

Route::get('/larapress/admin/media','AdminController@media')->name('adminMedia');

Route::get('/larapress/admin/posts','AdminController@posts')->name('adminPosts');
Route::post('/larapress/admin/posts','AdminController@savePosts')->name('adminSavePosts');

Route::get('/page/{name}','PageController@search');


Route::post('user/login','UserController@login')->name('login');

Route::post('user/register','UserController@store')->name('register');

Route::get('user/logout','UserController@logout')->name('logout');

Route::get('user/me','UserController@me')->name('homeuser');

Route::get('post/{slug}','PostController@showPost');

Route::get('/search','PostController@search');