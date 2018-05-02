<p align="center">
	<a href="https://experiencesampling.nl">
		<img src="public/img/tesc-logo-title.svg" alt="Tilburg Experience Sampling Center" width="350">
	</a>
</p>

<p align="center">
	<a href="https://github.com/mihaiconstantin/tesc-landing-page/releases/tag/v1.0.0">
		<img src="https://img.shields.io/badge/stable-v1.0.0-blue.svg?style=flat-square" alt="Latest Stable Release">
	</a>	
	<a href="https://opensource.org/licenses/MIT">
		<img src="https://img.shields.io/badge/license-MIT-yellow.svg?style=flat-square" alt="License">
	</a>
</p>

## About Tilburg Experience Sampling Center

> Tilburg Experience Sampling Center (TESC) is a center of expertise with respect to experience sampling (ESM) research in the broader applied context of health and well-being. TESC facilitates collaboration between researchers from various disciplines. By sharing knowledge and working together, researchers are empowered to innovate towards better understanding, preventing, and treating problems with health and well-being. The Tilburg Experience Sampling Center is part of the Tilburg School of Social and Behavioral Sciences of Tilburg University. TESC welcomes anyone with a research interest in ESM in the context of health and well-being and regularly organizes workshops or seminars.

> source: https://experiencesampling.nl

You can visit [our website](https://experiencesampling.nl) for more details and getting in touch with the team.

## About this repository

This repository hosts the landing page and the admin interface of TESC. It is built on top of many open source projects such as [Laravel Framework `5.5.*`](https://laravel.com/docs/5.5) and [Voyager `1.0.*`](https://github.com/the-control-group/voyager). Significant parts of our UI are built with [Vue.js `2.5.*`](https://github.com/vuejs/vue).

If you want to find out more about this repository you can drop a line at m.a.constantin@uvt.nl.

## Installation

**Prerequisites:**

- [`PHP`](http://php.net/downloads.php) >= 5.6.4
- [`Composer`](https://getcomposer.org/doc/00-intro.md)
- `MySql`/ [`MariaDB`](https://downloads.mariadb.org) server

*For more precise information regarding the prerequisites, check the [Laravel Documentation](https://laravel.com/docs/5.5).*

**Installation steps:**

- `git clone` this project in your environment
- `cd` into the `tesc-landing-page` project and run `composer install`
- once the installation is finished, run `cp .env.example .env` to create the `.env` configuration file  
- next, open the `.env` file in your favorite editor and modify the following variables accordingly:
	- `DB_DATABASE=`<small>your_database_name</small>
	- `DB_USERNAME=`<small>your_database_user</small>
	- `DB_PASSWORD=`<small>your_database_password</small>
	- `MAIL_USERNAME=`<small>your_email_service_username</small>
	- `MAIL_PASSWORD=`<small>your_email_service_password</small>
	- `MAILGUN_DOMAIN=`<small>mailgun_domain</small>
	- `MAILGUN_SECRET=`<small>mailgun_secret_key</small>
	- `MAIL_FROM_ADDRESS=`<small>mail_from_address</small>
	- `MAIL_FROM_NAME=`<small>mail_from_name</small>
	- `FALLBACK_CONTACT_PERSON=`<small>fallback_email_address</small>
	- `GOOGLE_RECAPTCHA_SECRET=`<small>recaptcha_secret</small>
	- `GOOGLE_RECAPTCHA_SITE_KEY=`<small>recaptcha_site_key</small>
	- *we use [Mailgun](https://www.mailgun.com/) to handle emailing jobs*
	- *also see [this resource](https://laravel.com/docs/5.5/configuration#environment-configuration) for more details regarding `.env` variables*
- then, run `php artisan key:generate` to generate an application-specific secret key that will be automatically added to the `APP_KEY` variable in `.env`
- next, run `php artisan migrate --seed` to build the database and seed it with the default configuration used in this study
- next, run `php artisan storage:link` to link the `storage` folder in order for the assets to be correctly loaded
- finally, run `php artisan serve` to start the developmental server and check out the application

## Ussage

- you can access the landing page by visiting http://localhost:8000 in your browser
- to access the admin interface visit http://localhost:8000/admin with the following login details:
	- email: `admin@example.com` | password: `admin`
	- email: `user@example.com` | password: `user`

## Planned changes

- add cookie consent
- improve the blog page:
	- reduce load time: fetch the posts as the user scrolls down the page or add pagination
	- fix the card layout bugs: 
		- cards not taking the empty space is nearby columns after filtering (i.e., in Chrome)
		- card content disappears when `vue-smooth-scroll` is applied
- server some of the files from a CDN

## License

The code in this repository is licensed under the [MIT license](https://opensource.org/licenses/MIT).