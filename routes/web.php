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

Route::get('/admin', 'Admin\AdminController@index'); 

Route::group([
    'prefix' => 'admin/products',
    'namespace' => 'Admin',
    'middleware' => 'manager'
], function() {
    Route::get('/', 'ProductController@index');
    
    Route::get('/create', 'ProductController@create')->name('product.create');
    Route::post('/create', 'ProductController@store');

    Route::get('/{id?}', 'ProductController@show');

    Route::get('/{id?}/edit', 'ProductController@edit');
    Route::post('/{id?}/edit', 'ProductController@update');

    Route::post('/{id?}/delete', 'ProductController@destroy');
});

Route::group([
    'prefix' => 'admin/orders',
    'namespace' => 'Admin',
    'middleware' => 'manager'
], function() {
    Route::get('/', 'OrdersController@index');
    
    Route::get('/create', 'OrdersController@create')->name('product.create');
    Route::post('/create', 'OrdersController@store');

    Route::get('/{id?}', 'OrdersController@show');

    Route::get('/{id?}/edit', 'OrdersController@edit');
    Route::post('/{id?}/edit', 'OrdersController@update');

    Route::post('/{id?}/delete', 'OrdersController@destroy');
});

Route::get('add-to-cart/{id}', [
    'as' => 'themgiohang',
    'uses' => 'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}', [
    'as' => 'xoagiohang', 
    'uses' => 'PageController@getDelItemCart'
]);

Route::get('dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@getCheckout'
]);

Route::post('dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@postCheckout'
]);

Route::get('search', [
	'as' => 'search',
	'uses' => 'PageController@getSearch'
]);

Route::get('/home', 'HomeController@index')->name('home');
