<?php

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

$apiDomain = sprintf('%s.%s', env('API_DOMAIN', 'api'), env('APP_URL'));

Route::domain($apiDomain)->group(function () {
    Route::namespace('Api')->group(function () {
        Route::namespace('v1')->prefix('v1')->group(function () {
            Route::prefix('auth')->group(function () {
                Route::post('login', 'AuthController@login');
                Route::get('me', 'AuthController@me');
                Route::post('refresh', 'AuthController@refresh');
                Route::get('logout', 'AuthController@logout');
            });

            Route::prefix('posts')->group(function () {
                Route::get('/', 'PostController@index');
                Route::post('/', 'PostController@store');
                Route::get('/{id}', 'PostController@show');
                Route::put('/{id}', 'PostController@update');
                Route::delete('/{id}', 'PostController@destroy');
            });
        });
    });
});
