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

Route::get('autoparks','AutoparksController@index');
Route::get('autoparks/create','AutoparksController@create')->name('autoparks.create');
Route::post('autoparks/store','AutoparksController@store')->name('autoparks.store');