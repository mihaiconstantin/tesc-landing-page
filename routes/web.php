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

// TODO: add the ogg facebook to the master template.

Route::get('/', function () {
	return view('index');
})->name('index')->middleware('ie:11');


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
 * Routes for the pages model.
 */
Route::get('page/members', 	'PageController@members') 	-> name('page.members');
Route::get('page/{slug}', 	'PageController@index') 	-> name('page.index');


/*
 * Voyager admin routes.
 */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
