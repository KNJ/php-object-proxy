<?php

require_once __DIR__.'/vendor/autoload.php';

$dog = new \Sample\Repeating\Dog;
$cat = new \Sample\Repeating\Cat;

echo $dog->bark() // => "わん"
    .PHP_EOL;

echo $dog->repeat(3)->bark() // => "わんわんわん"
    .PHP_EOL;

echo $cat->repeat(2)->mew() // => "にゃーにゃー"
    .PHP_EOL;
