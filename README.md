#PHP 8 what's new with examples

Showing what's new in PHP 8 with examples and tests.
I believe that reading about the changes is not enough, so grab this Docker and give all changes a try.

## Starting app
docker-compose up -d

## Official documentation
https://www.php.net/releases/8.0/en.php

## Main page - localhost
http://localhost:8080/

## Php info
http://localhost:8080/php_info.php

## Xdebug info
http://localhost:8080/xdebug_info.php

## Running tests
docker-compose run php vendor/bin/phpunit

## Using PhpUnit in PhpStorm
1. PhpUnit By Remote Interpreter
2. Provide full docker path to autoloader.php /opt/project/vendor/autoload.php

### Pro publico bono by Grzegorz Bielski