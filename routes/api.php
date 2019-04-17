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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/blogpost/create', 'PostController@store');
Route::get('/blogpost/edit/{id}', 'PostController@edit');
Route::post('/blogpost/update/{id}', 'PostController@update');
Route::delete('/blogpost/delete/{id}', 'PostController@delete');
Route::get('/blogposts', 'PostController@index');