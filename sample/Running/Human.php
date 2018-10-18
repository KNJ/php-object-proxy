<?php

namespace Sample\Running;

class Human extends Animal
{
    const LEGS = 2;

    public function run($speed = 1)
    {
        $speed = $speed * self::LEGS;

        return parent::run($speed);
    }
}
