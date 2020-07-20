<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Clients
Route::get('clients', 'ClientController@getAll')->name('getClients');
Route::get('client/{id}', 'ClientController@get')->name('getClient');
Route::post('client', 'ClientController@create')->name('addClient');
Route::put('client/{id}', 'ClientController@update')->name('editClient');
Route::delete('client/{id}', 'ClientController@delete')->name('deleteClient');

//Products
Route::get('products', 'ProductController@getAll')->name('getproduct');
Route::get('product/{id}', 'ProductController@get')->name('getproduct');
Route::post('product', 'ProductController@create')->name('addproduct');
Route::put('product/{id}', 'ProductController@update')->name('editproduct');
Route::delete('product/{id}', 'ProductController@delete')->name('deleteproduct');

//Orders Header
Route::get('orders', 'OrderController@getAllHeaderOrder')->name('getorders');

Route::post('order', 'OrderController@create')->name('createOrder');

//Order Lines
Route::get('lines/{id}', 'OrderController@getLines')->name('getLineOrder');