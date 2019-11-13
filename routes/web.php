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
  //All Users
  Route::get('/allUsers', ['as'=>'all.users','uses'=>'Admin\UserController@index']);
  Route::get('/addUsers', ['as'=>'add.users','uses'=>'Admin\UserController@create']);
  Route::post('/addUsers', ['as'=>'add.users','uses'=>'Admin\UserController@store']);
  Route::get('/allUsers/{id}', 'Admin\UserController@show');
  Route::get('/allUsers/{id}/edit', 'Admin\UserController@edit');
  Route::post('/editUsers/{id}', 'Admin\UserController@update');
  //End All Users

  Route::resource('/activeUsers', 'Admin\ActiveUserController');
  Route::resource('/unsubcribed', 'Admin\InActiveUserController');
  Route::resource('/imageEdit', 'Admin\ImageEditorController');
  Route::get('/all/subscriber', ['as'=>'all.subscriber', 'uses'=>'Admin\SubscriptionController@all_subscribers']);
  Route::get('/add/subscriber/{id}', ['as'=>'add.subscriber', 'uses'=>'Admin\SubscriptionController@create']);
  Route::post('/add/subscriber/{id}', ['as'=>'add.subscriber', 'uses'=>'Admin\SubscriptionController@add_subscriber']);
  Route::get('/view/subscriber/{id}', ['as'=>'view.subscriber', 'uses'=>'Admin\SubscriptionController@view_subscriber']);
  Route::get('/unpaid', ['as'=>'unpaid.index', 'uses'=>'Admin\InActiveSubscriptionController@index']);
});
