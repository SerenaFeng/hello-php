*********
PHP STEPS
*********

Composer: Dependency Manager for PHP
====================================

step 1: download and install composer, outcome composer.phar

.. code-block:: shell

    curl -s https://getcomposer.org/installer | php

step 2: install dependencies define in composer.json, generate composer.lock

.. code-block:: shell

    php composer.phar install

step 3: publish to VCS 

    composer.lock will be included, if leveraging exactly the same
    dependency among the team or along with the entire lifecycle of
    the project is required


References:
===========
1. `PHP Fatal error:  Uncaught ReflectionException: Class log does not exist in`_

    .. __: https://laracasts.com/discuss/channels/general-discussion/class-log-does-not-exist




e......damn laraval, see you next time :( 5555555
