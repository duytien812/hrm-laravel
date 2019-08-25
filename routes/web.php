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

Route::get('admin/', function () {
   return redirect('admin/login');
});

Route::get('admin/login', 'UserController@getLogin');
Route::post('admin/login', 'UserController@postLogin');
Route::get('admin/logout', 'UserController@getlogout');

Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function()
{
	Route::get('dashboard', 'DashboardController@getDashboard');

	Route::group(['prefix'=>'user'], function(){
		Route::get('list', 'UserController@getUser');
		Route::get('view/{idUserView}','UserController@getUser');


	});
	
	
});

Route::get('thu', function(){
	return view('admin.dashboard');
});