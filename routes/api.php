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


/*
 * Routes that are called asynchronously to populate the Vuex Store and update the database.
 */
Route::get('landing-page', 			'ApiController@landingPage')		->name('api.landingPage');
Route::get('posts', 				'ApiController@posts')				->name('api.posts');
Route::get('posts/author/{id}', 	'ApiController@author')				->name('api.posts.author');
Route::get('posts/category/{slug}', 'ApiController@category')			->name('api.posts.category');