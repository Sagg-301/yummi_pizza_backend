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

Route::prefix('order')->group(function () {
    Route::post('store', 'OrderController@store');
});

Route::prefix('cart')->group(function () {
    Route::post('store', 'CartController@store')->middleware('auth:api');
    Route::get('show', 'CartController@show')->middleware('auth:api');
});

Route::prefix('auth')->group(function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::get('get_user', 'AuthController@get_auth_user')->middleware('auth:api');
    Route::post('logout', 'AuthController@logout')->middleware('auth:api');
});
