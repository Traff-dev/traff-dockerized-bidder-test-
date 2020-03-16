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

// Route::post('/api/25', 'BidController@request');
// Route::post('/bidrequest/3', 'BidController@request30');
Route::get('/requestform', 'BidController@create');
// Route::get('/bidresponse', 'BidController@response');
// Route::get('/stats', 'PostbackController@se');
Route::get('/stats', 'StatsController@getstats');
// Auth::routes();
// Route::get('/setpostback', function() {
//     return view('mbpostback');
// });
// Route::get('/home', 'HomeController@index')->name('home');
