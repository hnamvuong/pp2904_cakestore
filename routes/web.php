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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [
	'as' => 'trang-chu',
	'uses' => 'PageController@getIndex'
]);

Route::get('product-type/{type}',[
	'as' => 'producttype',
	'uses' => 'PageController@getProductType'
]);

Route::get('/product-detail/{id}',[
	'as' => 'productdetail',
	'uses' => 'PageController@getProductDetail'
]);

Route::get('/contact',[
	'as' => 'contact',
	'uses' => 'PageController@getContact'
]);

Route::get('/about',[
	'as' => 'about',
	'uses' => 'PageController@getAbout'
]);

Route::get('add-to-cart/{id}', [
	'as' => 'themgiohang',
	'uses' => 'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}', [
	'as' => 'xoagiohang', 
	'uses' => 'PageController@getDelItemCart'
]);
