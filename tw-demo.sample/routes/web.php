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

Route::get('/create','UserController@create');
Route::post('/store','UserController@store');
Route::get('/','UserController@index');
Route::get('/edit/{id}','UserController@edit');
Route::post('/update','UserController@update');
//Route::get('/delete/{id}','UserController@getDelete');
Route::post('/delete','UserController@delete');
Route::get('/alldelete','UserController@allDelete');

Route::post('/copy','UserController@copy');



//Route::get('/edit','UserController@edit');

//Route::resource('/create', 'UsersController', ['only' => ['store']]);

//Route::get('/', function () {
  //  return view('welcome');
//