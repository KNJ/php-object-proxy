<?php

namespace Sample\Running;

class Dog extends Animal implements WithLegs
{
    use CanRunWithLegs;

    const LEGS = 4;

    public function legs(): int
    {
        return self::LEGS;
    }
}
