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


Auth::routes();

//トップページ Homeコントローラー 

Route::get('/', 'HomeController@index');

//ツイートを保存する Tweetコントローラー

Route::post('/tweet','TweetController@update');

//ユーザー一覧 Userコントローラー

Route::get('/users','UserController@index');

//フォローを実行する Userコントローラー

Route::post('/users/follow','UserController@follow');

Route::get('/users','UserController@index')->name('user_list');

Route::post('/users/follow','UserController@follow');



//Route::get('/edit','UserController@edit');

//Route::resource('/create', 'UsersController', ['only' => ['store']]);

//Route::get('/', function () {
  //  return view('welcome');
//

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
