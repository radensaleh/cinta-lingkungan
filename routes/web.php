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
//
// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('type-trash','TypeTrashController');
Route::resource('data-users','DataUserController');
Route::resource('data-complaint','ComplaintController');

Route::get('/', 'HomeController@home' )->name('home');

//Route::get('/register', 'UsersController@show_regisUser')->name('register');
//Route::post('/register', 'UsersController@create_users')->name('create');
//Route::post('/register-api', 'UsersController@store')->name('store');

Route::get('/login', 'LoginController@show_login')->name('login');
Route::post('/login-api', 'LoginController@doLogin');

//iflogin
Route::get('/index', 'IndexController@show_index')->name('index');

//data users
Route::get('/data-users', 'DataUserController@show_page')->name('datausers');
Route::post('/data-users-api', 'DataUserController@store');

//data trash
Route::get('/type-trash', 'TypeTrashController@show_page')->name('typetrash');
Route::post('/type-trash-api', 'TypeTrashController@store');

//data complaint
Route::get('/data-complaint', 'ComplaintController@show_page')->name('datacomplaint');
Route::post('data-complaint', 'ComplaintController@store');
