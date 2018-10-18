<?php

require_once __DIR__.'/vendor/autoload.php';

$dog = new \Sample\Judgement\Dog;

$dog->when(function ($dog) {
    return $dog->isHungry();
})->eat(); // => ばくばく

$dog->when(function ($dog) {
    return $dog->isHungry();
})->eat(); // => no output
