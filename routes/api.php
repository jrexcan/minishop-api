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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('products', 'ProductController@index');
Route::get('products/{id}','ProductController@show');
Route::post('products/{id}','ProductController@update');
Route::post('products','ProductController@store');
Route::delete('products/{id}','ProductController@destroy');


Route::get('product-categories', 'ProductCategoryController@index');
Route::get('product-categories/{id}','ProductCategoryController@show');
Route::post('product-categories/{id}','ProductCategoryController@update');
Route::post('product-categories','ProductCategoryController@store');
Route::delete('product-categories/{id}','ProductCategoryController@destroy');

Route::get('transactions', 'TransactionController@index');
Route::get('transactions/{id}','TransactionController@show');
Route::post('transactions/{id}','TransactionController@update');
Route::post('transactions','TransactionController@store');
Route::delete('transactions/{id}','TransactionController@destroy');
