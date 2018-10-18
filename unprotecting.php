<?php

require_once __DIR__.'/vendor/autoload.php';

$dog = new \Sample\Unprotecting\Dog;
echo $dog->getAge().PHP_EOL; // => "0"

try {
    $dog->grow();
} catch (\Throwable $e) {
    echo $e->getMessage() // => "Call to private method Sample\Unprotecting\Dog::grow() from context ''"
        .PHP_EOL;
}

$dog->unprotect()->grow();
echo $dog->getAge().PHP_EOL; // => "1"
$dog->unprotect()->grow(2);
echo $dog->getAge().PHP_EOL; // => "3"
