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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/schemes','SchemeController@index')->name('scheme.index');
Route::get('schemes/edit/{id}')->name('scheme.edit');
Route::get('schemes/delete/{id}')->name('scheme.delete');
Route::post('schemes/create','SchemeController@store')->name('schemes.create');


Route::get('/tehsils','TehsilController@index')->name('tehsil.index');
Route::post('/tehsils/create','TehsilController@store')->name('tehsil.create');