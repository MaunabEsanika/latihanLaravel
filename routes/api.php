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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/posts', 'ApiController@getAllPosts');

Route::get('/post/{id}', 'ApiController@getPost');

Route::get('posts/{user}', 'ApiController@getUserPosts');

Route::get('/profile/{user}', 'ApiController@getUserProfile');

Route::get('profiles', 'ApiController@getAllUsers');
