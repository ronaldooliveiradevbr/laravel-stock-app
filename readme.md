# Stock management app

This simple web application was written for studying purposes, using PHP programming language, Laravel MVC framework and Test-driven development.


## Requirements

* PHP >= 7.1.3 
* Composer >= 1.8.6


## Installation

1. Clone repository

1. Create `.env` file from `.env.example`

1. Install dependencies

1. Generate App key

1. Run test suite

1. Run migrations

1. Start development server


```console
git clone https://github.com/rfdeoliveira/laravel-stock-app.git && cd laravel-stock-app
cp .env.example .env
composer install
php artisan key:generate
vendor/bin/phpunit
php artisan migrate
php artisan serve
```
