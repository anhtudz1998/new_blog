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
Route::group(['prefix'=>'admin'],function(){
	Route::get('/home','Admin\AdminController@getHome');
	Route::group(['prefix'=>'category'],function(){
		Route::get('list','Admin\CategoryController@getList');

		
		Route::get('add','Admin\CategoryController@getAdd');
		Route::get('edit','Admin\CategoryController@getEdit');


	});
});