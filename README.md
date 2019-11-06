
## M+ Software CRUD

### Installing Laravel
Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine. This can be downloaded from https://getcomposer.org/. Make sure to add composer to your path!

#### Via Laravel Installer

First, download the Laravel installer using Composer:
```
  composer global require "laravel/installer"
```
Make sure to place composer's system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:
  - MacOS: $HOME/.composer/vendor/bin
  - GNU / Linux Distributions: $HOME/.config/composer/vendor/bin

### Setting up the M+ Software CRUD Web Applications

- First is to set up the environment, copy and paste **.env.example** in the root directory. Then rename the file to **.env**
- Open the **.env** using text editor, then change **DB_*** part of the file to fit your database information.
- Set up application key for security purpose using `php artisan key:generate`
- Run the migration to set up the database structure as well as seeding the database with some initial data. First run `composer dump-autoload`, then run `php artisan migrate:fresh --seed`.
- Make sure to always run `composer dump-autoload` whenever there is problem related with database.
- Install dependencies using `composer install` and `composer update`
- If everything goes well with no trouble, you can move on to running the application in local development server

#### Local Development Server
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:
```
  php artisan serve
```
