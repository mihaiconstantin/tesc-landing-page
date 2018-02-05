<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('index');
})->name('index');


/**
 * Routes that are called to populate the Vuex Store and update the database.
 */
Route::get('api/landing-page', 	'ApiController@landingPage')		->name('api.landingPage');
Route::post('api/message', 		'ApiController@storeMessage')		->name('api.storeMessage');
Route::post('api/subscription', 'ApiController@storeSubscription')	->name('api.storeSubscription');


/*
 * Routes for the project pages.
 */
Route::get('project/{slug}', 'ProjectController@show');


/*
 * Routes for the project pages.
 */
Route::get('blog/', 'BlogController@index')->name('blog.home');
Route::get('blog/post/{slug}', 'BlogController@post')->name('blog.post');


/*
 * Voyager admin routes.
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
