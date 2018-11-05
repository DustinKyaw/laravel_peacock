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


Route::get('user/login', 'UserController@index');

Route::post('user/login', 'UserController@login');


Route::get('user/dashboard', 'UserController@dashboard');


Route::get('user/packages', 'PackageController@index');

Route::post('user/create_package', 'PackageController@create');

Route::get('user/services', 'ServiceController@index');

Route::post('user/create_service', 'ServiceController@create');

Route::post('user/update_service', 'ServiceController@update');