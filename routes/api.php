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
//-------------------------------------------------------------------------------------------
Route::get('books', 'App\Http\Controllers\ApiBooksController@books')->name('books');
Route::get('book/{id}', 'App\Http\Controllers\ApiBooksController@bookid')->name('bookid');
Route::post('updatebook/{userId}', 'App\Http\Controllers\ApiBooksController@updateBook')->name('updateBook');
Route::post('addbook', 'App\Http\Controllers\ApiBooksController@addbook')->name('addbook');
Route::delete('deletebook/{id}', 'App\Http\Controllers\ApiBooksController@deletebook')->name('deletebook');
