> Work in progress.

### Installation

- clone the repository:
```
git@github.com:mihaiconstantin/tesc-landing-page.git
```
- install `php` packages:
```
cd tesc-landing-page
composer install
```
- create the `.env` configuration file:
```
cp .env.example env
```
- set the application key:
```
php artisan key:generate
```
- create the database:
```
cd database
touch tesc.sqlite
```
- update the following entries in the `.env` file:
```
APP_URL=http://localhost:8000
DB_CONNECTION=sqlite

// Absolute path to the database
DB_DATABASE=/var/www/tesc-landing-page/database/tesc.sqlite
```
- add the following entries in the `.env` file:
```
GOOGLE_RECAPTCHA_SECRET=<Add your secret token here>
GOOGLE_RECAPTCHA_BASE_URI=https://www.google.com/recaptcha/api/siteverify
```
- install `Voyager`:
```
php artisan voyager:install
```
- refresh the migrations and seed the database: 
```
php artisan migrate:refresh --seed
```
- start the developmental server (http://localhost:8000)
```
php artisan serve
```

### Things to do

- add cookie consent
- add subscription validation
- send emails for:
	- contact form
	- subscription form
- improve the blog page:
	- fetch the posts from the `API` as the user scrolls down the page (i.e., to reduce upfront load time)
	- reduce the `API` data size by limiting the collection to strictly what is needed (e.g., discard the post body---not needed in `BlogPost.vue`)
	- fix the card layout bugs: 
		- cards don't take the empty space is nearby columns after filtering (i.e., in Chrome)
		- top card from middle row turns blank on `1920x1080` resolution as the user starts scrolling (i.e., in Chrome)
	- server some of the files from a `CDN`	
