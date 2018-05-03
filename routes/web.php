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
})->name('index')->middleware('ie:11');


/*
 * Routes that are called asynchronously to populate the Vuex Store and update the database.
 */
Route::get('api/landing-page', 			'ApiController@landingPage')		->name('api.landingPage');
Route::get('api/posts', 				'ApiController@posts')				->name('api.posts');
Route::get('api/posts/author/{id}', 	'ApiController@author')				->name('api.posts.author');
Route::get('api/posts/category/{slug}', 'ApiController@category')			->name('api.posts.category');


/*
 * Contact Controller routes.
 */
Route::post('contact/store', 'ContactController@store')->name('contact.store');


/*
 * Subscription Controller routes.
 */
Route::post('subscription/store',               'SubscriptionController@store')	        ->name('subscription.store');
Route::get('subscription/subscribe/{token}',    'SubscriptionController@subscribe')     ->name('subscription.subscribe');
Route::get('subscription/unsubscribe/{token}',  'SubscriptionController@unsubscribe')   ->name('subscription.unsubscribe');


/*
 * Routes for the blog pages.
 */
Route::get('blog/', 				'BlogController@index')		->name('blog.home')		->middleware('ie:11');
Route::get('blog/post/{slug}', 		'BlogController@post')		->name('blog.post');
Route::get('blog/author/{id}', 		'BlogController@author')	->name('blog.author')	->middleware('ie:11');
Route::get('blog/category/{slug}', 	'BlogController@category')	->name('blog.category')	->middleware('ie:11');


/*
 * Voyager admin routes.
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
