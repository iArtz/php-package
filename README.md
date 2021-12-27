# php-package

Generate random string.

## Installation

This project using composer.

`$ composer require iartz/php-package`

## Usage

Generate random string

```php
<?php

use Utils\RandomString;

$randomString = new RandomString(6);

print $randomString->generate();
```