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

// Route::post('/webhook', 'BotController@webhook');
// Route::post('/methodTester', 'BotController@methodTester');

// Route::post('/tans-wardrobe/authenticate-instagram', 'InstagramApiController@authenticate');
// Route::post('/tans-wardrobe/feed/remove', 'InstagramApiController@removeTimelinePost');
