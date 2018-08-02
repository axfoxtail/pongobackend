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

Route::group(['middleware' => 'cors', 'prefix' => 'v1'], function(){


	Route::post('auth/register/phonenumber', 'Api\UsersController@registerPhonenumber');
	Route::post('auth/register/verify_phonenumber', 'Api\UsersController@verify_sms_code');
	Route::post('auth/register/username', 'Api\UsersController@registerUsername');
	Route::post('auth/register/avatars', 'Api\UsersController@registerAvatars');
	 
});

Route::group(['middleware' => ['cors', 'jwt.auth'], 'prefix' => 'v1'], function(){

	Route::post('auth/test', 'Api\UsersController@testToken');
});