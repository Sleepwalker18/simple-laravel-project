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

/*Methods for contacts*/
Route::get('/contacts', 'ContactController@index');
Route::put('/contacts/update/{id}', 'ContactController@update');
Route::post('/contacts/save', 'ContactController@store');
Route::delete('/contacts/delete/{id}', 'ContactController@destroy');
Route::get('/contacts/search', 'ContactController@show');
