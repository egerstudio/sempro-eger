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

/**
 * Search
 */

Route::post('/search', 'VideosController@search');
Route::get('/search', 'VideosController@search');

Route::auth();

/**
 * Backend routes for categories, videos and user profile
 */
Route::resource('backend/categories', 'BackendCategoriesController');
Route::get('backend/categories/move', 'BackendCategoriesController@move');
Route::post('backend/categories/move/all', 'BackendCategoriesController@moveAll');
Route::resource('backend/videos', 'BackendVideosController');

/**
 * User
 */
Route::get('backend/profile/{user}', 'UsersController@show');
Route::get('backend/profile/{user}/edit', 'UsersController@edit');
Route::patch('backend/profile/{user}', 'UsersController@update');

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
