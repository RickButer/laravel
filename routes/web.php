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

Route::get('/', 'page_controller@index');
Route::get('/to_do', 'page_controller@to_do');
Route::get('/to_do/new', 'to_doController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
