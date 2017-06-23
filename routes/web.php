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

Route::get('/', 'SiteController@index')->name('home');
Route::post('/quote', ['before' => 'csrf', 'QuoteController@quote']);

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/logout', 'AdminController@destroy');

Route::get('/company/{page}', 'SiteController@page')->name('company');
Route::post('/edit', 'SiteController@edit');

