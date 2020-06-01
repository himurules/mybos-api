<?php

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    //Buildings Routes
    Route::get(
        'buildings/{buildings}/activity-feed',
        'BuildingsController@activityFeed'
    );
});

Route::group([

    'middleware' => 'api',

], function ($router) {
    //Buildings Routes
    Route::get(
        'buildings/{buildings}/activity-feed',
        'BuildingsController@activityFeed'
    );
    Route::get(
        'buildings/{buildings}/notes',
        'BuildingsController@notes'
    );
    Route::get(
        'buildings/{buildings}/work-orders',
        'BuildingsController@workOrders'
    );
    Route::get(
        'buildings/{buildings}/cases',
        'BuildingsController@cases'
    );
    Route::get(
        'buildings/{buildings}/summary',
        'BuildingsController@summary'
    );
    Route::get(
        'buildings/{buildings}/cases-summary',
        'BuildingsController@casesSummary'
    );

    //Important Numbers
    Route::get(
        '/important-numbers',
        'ImportantNumbersController@index'
    );
});
