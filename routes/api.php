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


//routes
Route::get('/getObjects', 'postController@get');
Route::post('/createObject', 'postController@create');
Route::post('/updateObject', 'postController@update');
Route::post('/deleteObject', 'postController@destroy');
