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
   .sass('resources/assets/sass/entries/index.scss', 		'public/css')
   .options({ extractVueStyles: true });
   

// Project pages.
mix.js('resources/assets/js/entries/project.js', 			'public/js')
   .sass('resources/assets/sass/entries/project.scss',		'public/css');


// Voyager override.
mix.sass('resources/assets/sass/entries/voyager-override.scss',	'public/css');