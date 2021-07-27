# About project

Review project was created for gathering reviews on services.

## Requirements
PHP 7.3.0 Required

## Settings
You should create .env file in the root of the project (there is example with variables). Enter credentials for your database, project name,
telegram bot token, default category (if user delete parameter 'code') and so on.

## Setup
`composer install` - install all dependencies

`php artisan migrate --seed` - create database with initial user and categories
