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

Route::apiResource('users' , 'Api/UserController');
Route::post('create' , 'EmployerController@create');
Route::get('getAll' , 'EmployerController@getAll');
Route::get('getData/{id}' , 'EmployerController@getData');
Route::post('updateData' , 'EmployerController@updateData');
Route::get('deleteData/{id}' , 'EmployerController@deleteData');