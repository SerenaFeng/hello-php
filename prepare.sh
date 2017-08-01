#!/bin/bash
# this script is used to do the preparation works,
# including install composer and dependencies,
# before run the server

curl -s https://getcomposer.org/installer | php
php composer.phar install
