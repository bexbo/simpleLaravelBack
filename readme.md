# Simple Laravel Back
## Prerequisites
This program uses:
* [MAMP](https://www.mamp.info/en/) which is available for free
* [Laravel](https://laravel.com/docs/5.4#installation), just follow the installation guide
* [LaravelDoctrine](http://www.laraveldoctrine.org/docs/1.3/orm/installation), all of the mentioned changes in the configuration files have already been done but you still need to run the console commands

If you want to try the program you can use [simpleAngular2Front](https://github.com/bexbo/simpleAngular2Front).

## Installation
In order to properly set up the program you need to clone this repository into the htdocs folder in MAMP. This is done by opening htdocs in the terminal/console and run
```shell
git clone https://github.com/bexbo/simpleLaravelBack
cd simpleLaravelBack
```
Now run
```shell
composer require symfony/psr-http-message-bridge
composer require zendframework/zend-diactoros
php artisan doctrine:schema:create
```


## Configuration
* In the httpd.conf file found in MAMP/Apache, change the line regarding .htaccess files that says AllowOverride none to AllowOverride All

* The program is written for a server with these settings in the .env file
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=objects
DB_USERNAME=root
DB_PASSWORD=root
```
* To change these settings go to simpleLaravelBack/config/databases.php
* Note that the URLs written in simpleAngular2Front expects the REST-api to be hosted at localhost:8888

## Running the program
To run the program simply run MAMP and make sure that both the MySQL and the Apache servers are running.
