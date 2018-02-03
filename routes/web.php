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
 * Routes that will be called by Axios to populate the Vuex Store.
 */
Route::get('api/all', 'ApiController@all');
Route::get('api/carousel', 'ApiController@carousel');
Route::get('api/about', 'ApiController@about');
Route::get('api/people', 'ApiController@people');
Route::get('api/project', 'ApiController@project');
Route::get('api/contact', 'ApiController@contact');
Route::get('api/subscription', 'ApiController@subscription');


/**
 * Routes that handle POST requests (e.g., storing a contact message to the database).
 */
Route::post('api/message', 'ApiController@storeMessage')->name('message.store');
Route::post('api/subscription', 'ApiController@storeSubscription')->name('subscription.store');


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
