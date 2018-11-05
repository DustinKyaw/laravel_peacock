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


Route::get('user/dashboard', function (){

    return view('layouts/admin/dashboard');
});


Route::get('user/packages', 'PackageController@index');

Route::post('user/create_package', 'PackageController@create');

