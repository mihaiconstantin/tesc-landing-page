> Work in progress.

### Installation

- clone the repository:
```
git clone git@github.com:mihaiconstantin/tesc-landing-page.git
```
- install the `php` packages:
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
- update the following entries in the `.env` according to your needs:
```
DB_CONNECTION=mysql
DB_DATABASE=your_database_name_or_path
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

MAIL_DRIVER=mailgun
MAIL_HOST=smtp.mailgun.org
MAIL_USERNAME=your_email_service_username
MAIL_PASSWORD=your_email_service_password

MAILGUN_DOMAIN=mailgun_domain
MAILGUN_SECRET=mailgun_secret_key

MAIL_FROM_ADDRESS=mail_from_address
MAIL_FROM_NAME=mail_from_name
FALLBACK_CONTACT_PERSON=fallback_email_address

GOOGLE_RECAPTCHA_SECRET=recaptcha_secret
GOOGLE_RECAPTCHA_SITE_KEY=recaptcha_site_key
```
- install `Voyager`:
```
php artisan voyager:install
```
- refresh the migrations and seed the database: 
```
php artisan migrate:refresh --seed
```
- start the developmental server:
```
php artisan serve
```

### Usage

- landing page: http://localhost:8000
- dashboard: http://localhost:8000/admin
	- login details:
		- email: `admin@example.com` | password: `admin`
		- email: `user@example.com` | password: `user`


### Things to do

- add cookie consent
- improve the blog page:
	- fetch the posts from the `API` as the user scrolls down the page (i.e., to reduce upfront load time)
	- reduce the `API` data size by limiting the collection to strictly what is needed (e.g., discard the post body---not needed in `BlogPost.vue`)
	- fix the card layout bugs: 
		- cards don't take the empty space is nearby columns after filtering (i.e., in Chrome)
	- server some of the files from a `CDN`	
