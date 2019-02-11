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

Route::get('users', 'userController@index');
Route::post('users', 'userController@store');
Route::get('users/{id}', 'userController@show');
Route::put('users/{id}', 'userController@update');
Route::delete('users/{id}', 'userController@destroy');

Route::get('recipes', 'recipeController@index');
Route::post('recipes', 'recipeController@store');
Route::get('recipes/{id}', 'recipeController@show');
Route::put('recipes/{id}', 'recipeController@update');
Route::delete('recipes/{id}', 'recipeController@destroy');




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
