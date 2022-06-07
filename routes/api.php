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

Route::get('/murid', 'App\Http\Controllers\MuridAPIController@index');
Route::post('/murid', 'App\Http\Controllers\MuridAPIController@create');
Route::put('/murid/{id}', 'App\Http\Controllers\MuridAPIController@update');
Route::delete('/murid/{id}', 'App\Http\Controllers\MuridAPIController@destroy');

Route::get('/guru', 'App\Http\Controllers\GuruAPIController@index');
Route::post('/guru', 'App\Http\Controllers\GuruAPIController@create');
Route::put('/guru/{id}', 'App\Http\Controllers\GuruAPIController@update');
Route::delete('/guru/{id}', 'App\Http\Controllers\GuruAPIController@destroy');

Route::get('/materi', 'App\Http\Controllers\MateriAPIController@index');
Route::post('/materi', 'App\Http\Controllers\MateriAPIController@create');
Route::put('/materi/{id}', 'App\Http\Controllers\MateriAPIController@update');
Route::delete('/materi/{id}', 'App\Http\Controllers\MateriAPIController@destroy');
