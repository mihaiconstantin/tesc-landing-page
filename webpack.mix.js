let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Lading page.
mix.js('resources/assets/js/entries/index.js', 				'public/js')
   .sass('resources/assets/sass/entries/index.scss', 		'public/css');
   

// Post pages.
mix.js('resources/assets/js/entries/post.js', 			'public/js')
   .sass('resources/assets/sass/entries/post.scss',		'public/css');


// Blog page.
mix.js('resources/assets/js/entries/blog.js', 			'public/js')
   .sass('resources/assets/sass/entries/blog.scss',		'public/css');


// Members page.
mix.js('resources/assets/js/entries/members.js', 			'public/js')
	.sass('resources/assets/sass/entries/members.scss',		'public/css');


// Subscription template styles (i.e., used in subscribe.blade and unsubscribe.blade).
mix.sass('resources/assets/sass/entries/subscription.scss', 'public/css');


// Voyager override.
mix.sass('resources/assets/sass/entries/voyager-override.scss',	'public/css');


// Copy images that cannot be uploaded via Voyager (i.e., the loader used in WordAnimation.vue).
mix.copyDirectory('resources/assets/img', 'public/img');