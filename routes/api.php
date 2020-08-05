<?php

use Illuminate\Support\Facades\Route;

Route::post('register', 'Api\RegisterController@action');
Route::post('login', 'Api\LoginController@action');
Route::get('me', 'Api\UserController@me')->middleware('auth:api');
Route::post('tarif_add', 'Api\TarifController@new')->middleware('auth:api');
Route::get('tarif', 'Api\TarifController@index')->middleware('auth:api');
Route::post('listrik_add', 'Api\ListrikController@add')->middleware('auth:api');
Route::get('listrik', 'Api\ListrikController@index')->middleware('auth:api');