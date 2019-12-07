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


Route::get('user-registration', 'UserController@index');

Route::post('user-store', 'UserController@userPostRegistration');

Route::get('user-login', 'UserController@userLoginIndex');

Route::post('login', 'UserController@userPostLogin');

Route::get('dashboard', 'UserController@dashboard');

Route::get('logout', 'UserController@logout');








