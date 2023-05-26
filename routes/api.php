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

// API_CHANGES
Route::post('register', 'API\APIAuthController@register');
Route::post('login', 'API\APIAuthController@login');
// Route::post('logout', 'API\APIAuthController@logout')->middleware('auth:api'); 
Route::middleware('auth:api')->group( function () {
    Route::get('user', 'API\APIAuthController@user');
    Route::resource('project', 'API\APIProjectController');
});