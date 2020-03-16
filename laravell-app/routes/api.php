<?php

use Illuminate\Http\Request;

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

Route::post('/25', 'BidController@store');
Route::get('/postback', 'PostbackController@store');
Route::get('/nurl', 'PostbackController@nurl');
Route::get('/lurl', 'PostbackController@lurl');