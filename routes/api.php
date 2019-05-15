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


Route::group([
    'prefix' => 'auth',
], function () {
    Route::post('login', 'Api\AuthController@login');
    Route::post('signup', 'Api\AuthController@signup');
    Route::get('signup/activate/{token}', 'Api\AuthController@signupActivate');
    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::get('logout', 'api\AuthController@logout');
        Route::get('user', 'api\AuthController@user');
    });
});

Route::group([
    'middleware' => 'auth:api',
], function () {
    Route::resource('users', 'UserController');
    Route::resource('clients', 'ClientController');
    Route::resource('agents', 'AgentController');
    Route::resource('products', 'ProductController');
    Route::resource('reminders', 'RemainderController');
});
