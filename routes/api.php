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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['prefix' => 'v1'], function(){
// 	Route::resource('lessons', 'LessonsController');
// });

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->group(['namespace' => 'App\Api\Controllers'], function($api) {

		$api->get('lessons', 'LessonsController@index');

	});

});