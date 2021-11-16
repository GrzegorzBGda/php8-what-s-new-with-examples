#PHP 8 what's new with examples

Showing what's new in PHP 8 with examples and tests.
I believe that reading about the changes is not enough, so grab this Docker and give all changes a try.
Read the docs Luke!

## How does it work?
Every new change has its own separate test. Read the tests, modify them and have fun!

## Documentation
1. 8.0 https://www.php.net/releases/8.0/en.php
2. 8.1 
   - https://wiki.php.net/todo/php81
   - https://kinsta.com/blog/php-8-1

## What's new in Php 8
### PHP 8.0
1. Named arguments: https://www.php.net/releases/8.0/en.php#named-arguments
2. Attributes: https://www.php.net/releases/8.0/en.php#attributes
3. Constructor property promotion: https://www.php.net/releases/8.0/en.php#constructor-property-promotion
4. Union types: https://www.php.net/releases/8.0/en.php#union-types
5. Match expression: https://www.php.net/releases/8.0/en.php#match-expression
6. Nullsafe operator: https://www.php.net/releases/8.0/en.php#nullsafe-operator
7. Saner string to number comparisons: https://www.php.net/releases/8.0/en.php#saner-string-to-number-comparisons
8. Consistent type errors for internal functions: https://www.php.net/releases/8.0/en.php#consistent-type-errors-for-internal-functions

### PHP 8.1
9. Pure Intersection Types: https://kinsta.com/blog/php-8-1/#pure-intersection-types
10. Enums: https://kinsta.com/blog/php-8-1/#enums
11. Never: https://kinsta.com/blog/php-8-1/#the-never-return-type
12. Fibers: https://kinsta.com/blog/php-8-1/#fibers

## First use
docker-compose up -d --build


## Starting app
docker-compose up -d

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