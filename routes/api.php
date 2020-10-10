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


Route::post('/add-user','App\Http\Controllers\ApiController@addNewUser')->middleware('apicheck');

Route::get('/remove-user/{id}','App\Http\Controllers\ApiController@deleteUser')->middleware('apicheck');

Route::get('/index','App\Http\Controllers\ApiController@index')->middleware('apicheck');

Route::post('/update-user','App\Http\Controllers\ApiController@updateUser')->middleware('apicheck');


