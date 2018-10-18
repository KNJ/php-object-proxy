<?php

require_once __DIR__.'/vendor/autoload.php';

$dog = new \Sample\Running\Dog;

// 犬が走る
echo $dog->run() // => 1
    .PHP_EOL;

// 犬の脚が走る
echo $dog->withLegs()->run() // => 4
    .PHP_EOL;
