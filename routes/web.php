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

Route::post('/whoami', 'WhatsMyNameController@index');

Route::get('/askme', function() { return view('whoami'); });



Route::get('/login', function() { return view('login'); });

Route::post('/dologin', 'LoginController@index');