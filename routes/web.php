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
Route::get('/', ['as'=>'trade.home', 'uses'=>'PagesController@index']);
Route::get('/About', ['as'=>'trade.about', 'uses'=>'PagesController@about']);
Route::get('/photo/show', ['as'=>'photo.show', 'uses'=>'PhotoController@show']);
Route::post('/photo/show', ['as'=>'photo.store', 'uses'=>'PhotoController@store']);

/* admin */
Route::group(['middleware'=>'isAdmin'], function () {
  Route::get('/dashboard', ['as'=>'trade.dashboard', 'uses'=>'Admin\DashboardController@index']);
  Route::resource('/users', 'Admin\UserController');
  Route::resource('/activeUsers', 'Admin\ActiveUserController');
  Route::resource('/unsubcribed', 'Admin\InActiveUserController');
  Route::resource('/imageEdit', 'Admin\ImageEditorController');
});
