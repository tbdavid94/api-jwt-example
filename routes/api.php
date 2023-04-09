<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', 'AuthController@login')->name('login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::apiResource('posts', 'PostController',['store','update','delete']);
    Route::post('reply/{id}', 'ReplyController@store');
    Route::post('course-{id}-register', 'CourseController@register');
    Route::apiResource('courses', 'CourseController', ['store']);

});
