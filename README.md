#PHP 8 what's new with examples

Showing what's new in PHP 8 with examples and tests.
I believe that reading about the changes is not enough, so grab this Docker and give all changes a try.
Read the docs Luke!

## How does it work?
Every new change has its own separate test. Read the tests, modify them and have fun!

## Documentation
1. 8.0 https://www.php.net/releases/8.0/en.php
2. 8.1 https://www.php.net/releases/8.1/en.php
3. 8.2 https://www.php.net/releases/8.2/en.php

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
1. Enums: https://www.php.net/releases/8.1/en.php#enumerations
2. Readonly properties: https://www.php.net/releases/8.1/en.php#readonly_properties
3. First-class callable syntax: https://www.php.net/releases/8.1/en.php#first_class_callable_syntax
4. New in initializers: https://www.php.net/releases/8.1/en.php#new_in_initializers
5. Pure Intersection Types: https://www.php.net/releases/8.1/en.php#pure_intersection_types
6. Never: https://www.php.net/releases/8.1/en.php#never_return_type
7. Final class constants: https://www.php.net/releases/8.1/en.php#final_class_constants
8. Explicit Octal numeral notation: https://www.php.net/releases/8.1/en.php#explicit_octal_notation
9. Fibers: https://www.php.net/releases/8.1/en.php#fibers
10. Array unpacking support for string-keyed arrays: https://www.php.net/releases/8.1/en.php#array_unpacking_support_for_string_keyed_arrays

### PHP 8.2
1. Readonly classes https://www.php.net/releases/8.2/#readonly_classes

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