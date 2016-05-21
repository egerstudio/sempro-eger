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

Route::get('/', 'VideosController@index');

Route::auth();

Route::get('/backend', 'BackendController@backend');

Route::get('/backend/categories', 'BackendCategoriesController@index');

Route::get('/video/{video}', 'VideosController@show');

Route::get('/{category}', 'VideosController@categoryIndex');

Route::get('/archive/{year}', 'VideosController@archiveIndex');





