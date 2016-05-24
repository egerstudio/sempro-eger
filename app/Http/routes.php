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

/**
 * Backend routes for categories, videos and user profile
 */
Route::resource('backend/categories', 'BackendCategoriesController');
Route::get('backend/categories/move', 'BackendCategoriesController@move');
Route::post('backend/categories/move/all', 'BackendCategoriesController@moveAll');

Route::resource('backend/videos', 'BackendVideosController');

Route::get('backend/profile', 'BackendController@editProfile');
Route::post('backend/profile', 'BackendController@updateProfile');

/**
 * Front end routes for videos, archives, categories 
 */
Route::get('/video/{video}', 'VideosController@show');

Route::get('/archive/{year}', 'VideosController@archive');

Route::get('/{category}', 'VideosController@category');

/**
 * API route for getting YouTube details
 */
Route::get('api/youtubedetails/', 'AjaxController@YouTubeDetails');
