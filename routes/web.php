<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('template.index');
});

//Murid
Route::get('/murid', 'App\Http\Controllers\MuridController@index');
Route::get('/murid/create', 'App\Http\Controllers\MuridController@create');
Route::post('/murid', 'App\Http\Controllers\MuridController@store');
Route::get('/murid/{murid}/edit', 'App\Http\Controllers\MuridController@edit');
Route::patch('/murid/{murid}', 'App\Http\Controllers\MuridController@update');
Route::get('/murid/{murid}/delete', 'App\Http\Controllers\MuridController@destroy');

//Guru
Route::get('/guru', 'App\Http\Controllers\GuruController@index');
Route::get('/guru/create', 'App\Http\Controllers\GuruController@create');
Route::post('/guru', 'App\Http\Controllers\GuruController@store');
Route::get('/guru/{guru}/edit', 'App\Http\Controllers\GuruController@edit');
Route::patch('/guru/{guru}', 'App\Http\Controllers\GuruController@update');
Route::get('/guru/{guru}/delete', 'App\Http\Controllers\GuruController@destroy');

//Materi
Route::get('/materi', 'App\Http\Controllers\MateriController@index');
Route::get('/materi/create', 'App\Http\Controllers\MateriController@create');
Route::get('/materi/{materi}', 'App\Http\Controllers\MateriController@show');
Route::post('/materi', 'App\Http\Controllers\MateriController@store');
Route::get('/materi/{materi}/edit', 'App\Http\Controllers\MateriController@edit');
Route::patch('/materi/{materi}', 'App\Http\Controllers\MateriController@update');
Route::get('/materi/{materi}/delete', 'App\Http\Controllers\MateriController@destroy');
