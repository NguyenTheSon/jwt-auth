<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('api/auth/login',[
    'as' => 'login', 'uses' => 'Auth\AuthController@index']);
Route::get('/',  function(){
    return view('welcome');
});
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->post('auth/login','App\Http\Controllers\Api\AuthController@login');    
});
$api->version('v1', ['middlweare' => 'api.auth'], function($api){
    
    $api->get('users','App\Http\Controllers\Api\AuthController@index');  
    $api->get('user','App\Http\Controllers\Api\AuthController@show');
    $api->get('token','App\Http\Controllers\Api\AuthController@getToken');
});
