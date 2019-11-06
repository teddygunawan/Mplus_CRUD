<h1>M+ Software CRUD</h1>

<h3>Installing Laravel</h3>
Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine. This can be downloaded from https://getcomposer.org/. Make sure to add composer to your path!

<h4>Via Laravel Installer</h4>

First, download the Laravel installer using Composer:
```
  composer global require "laravel/installer"
```
Make sure to place composer's system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:
<ul>
  <li>MacOS: $HOME/.composer/vendor/bin</li>
  <li>GNU / Linux Distributions: $HOME/.config/composer/vendor/bin</li>
</ul>

<h3>Setting up the M+ Software CRUD Web Applications</h3>
<ul>
  <li>First is to set up the environment, copy and paste ** .env.example ** in the root directory. Then rename the file to **.env**</li>
  <li>Open the **.env** using text editor, then change ** DB_* ** part of the file to fit your database information.</li>
  <li>Set up application key for security purpose using `php artisan key:generate`</li>
  <li>
    Run the migration to set up the database structure as well as seeding the database with some initial data. First run `composer dump-autoload`, then run `php artisan migrate:fresh --seed`.
  </li>
  <li>Make sure to always run `composer dump-autoload` whenever there is problem related with database.</li>
  <li>Install dependencies using `composer install` and `composer update`</li>
  <li>If everything goes well with no trouble, you can move on to running the application in local development server</li>
 </ul>

<h4>Local Development Server</h4>
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:
```
  php artisan serve
```
