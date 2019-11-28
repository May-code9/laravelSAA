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
Route::get('/about', ['as'=>'trade.about', 'uses'=>'PagesController@about']);
Route::get('/services', ['as'=>'trade.services', 'uses'=>'PagesController@services']);
Route::get('/contact', ['as'=>'trade.contact', 'uses'=>'PagesController@contact']);
Route::get('/faqs', ['as'=>'trade.faqs', 'uses'=>'PagesController@faqs']);
Route::get('/my/account', ['as'=>'trade.user', 'uses'=>'PagesController@user'])->middleware('auth');
Route::get('/edit/my/account', ['as'=>'trade.user.edit', 'uses'=>'PagesController@edit_user'])->middleware('auth');
Route::post('/edit/my/account', ['as'=>'trade.user.edit', 'uses'=>'PagesController@edit_user_post'])->middleware('auth');
Route::get('/photo/show', ['as'=>'photo.show', 'uses'=>'PhotoController@show']);
Route::post('/photo/show', ['as'=>'photo.store', 'uses'=>'PhotoController@store']);
Route::get('/receipt/show', ['as'=>'receipt.show', 'uses'=>'PhotoController@receipt_show']);
Route::post('/receipt/show', ['as'=>'receipt.show', 'uses'=>'PhotoController@receipt_store']);
Route::post('/newsletter', 'PagesController@newsletter');
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
  //Route::get('/add/subscriber/{id}', ['as'=>'add.subscriber', 'uses'=>'Admin\SubscriptionController@create']);
  //Route::post('/add/subscriber/{id}', ['as'=>'add.subscriber', 'uses'=>'Admin\SubscriptionController@add_subscriber']);
  Route::get('/view/subscriber/{id}', ['as'=>'view.subscriber', 'uses'=>'Admin\SubscriptionController@view_subscriber']);
  Route::get('/edit/subscriber/{id}', ['as'=>'edit.subscriber', 'uses'=>'Admin\SubscriptionController@edit_subscriber']);
  Route::post('/edit/subscriber/{id}', ['as'=>'edit.subscriber', 'uses'=>'Admin\SubscriptionController@update_subscriber']);
  Route::get('/unpaid', ['as'=>'unpaid.index', 'uses'=>'Admin\InActiveSubscriptionController@index']);
  Route::get('/user/qrcode', ['as'=>'qrcode.view', 'uses'=>'Admin\QrcodeController@generate_view']);
  Route::post('/generate/qrcode/{id}', ['as'=>'qrcode.generate', 'uses'=>'Admin\QrcodeController@post_generate_view']);
  Route::get('/qrcode/userview/{id}', 'Admin\QrcodeController@view_generated');
  Route::get('/verified', ['as'=>'admins.all', 'uses'=>'Admin\AdminController@all_admin_users']);
  Route::get('/select/admins/', ['as'=>'admins.add', 'uses'=>'Admin\AdminController@add_admin_users']);
  Route::post('select/admins/', ['as'=>'admins.add', 'uses'=>'Admin\AdminController@post_admin_user']);
  Route::get('/admins/{id}', ['as'=>'admins.show', 'uses'=>'Admin\AdminController@admin_user']);
  Route::get('/edit/admin/{id}', 'Admin\AdminController@edit_admin');
  Route::post('/edit/admin/{id}', 'Admin\AdminController@post_edit_admin');
});
