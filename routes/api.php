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
Route::get('client/{id}', 'ClientController@get')->name('getClient');
Route::get('clients', 'ClientController@getAll')->name('getClients');
Route::post('client', 'ClientController@create')->name('addClient');
Route::put('client/{id}', 'ClientController@update')->name('editClient');
Route::delete('client/{id}', 'ClientController@delete')->name('deleteClient');

//Products
Route::get('product/{id}', 'ProductController@get')->name('getproduct');
Route::get('products', 'ProductController@getAll')->name('getproduct');
Route::post('product', 'ProductController@add')->name('addproduct');
Route::post('product/{id}', 'ProductController@edit')->name('editproduct');
Route::get('product/delete/{id}', 'ProductController@delete')->name('deleteproduct');