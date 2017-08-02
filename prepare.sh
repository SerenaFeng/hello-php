#!/bin/bash
# this script is used to do the preparation works,
# including install composer and dependencies,
# before run the server

# composer relevant
curl -s https://getcomposer.org/installer | php
php composer.phar install
cp composer.phar /usr/local/bin/composer

# laravel relevant
composer global require 'laravel/installer'
export PATH=$HOME/.composer/vendor/bin:$PATH

#install laravel under the current directory
laravel new

# Writing Service
php artisan make:provider RiakServiceProvider
