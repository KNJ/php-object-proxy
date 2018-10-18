<?php

namespace Sample\Judgement;

class Dog
{
    use CanJudge;

    public $hungry = true;

    public function eat()
    {
        echo 'ばくばく'.PHP_EOL;
        $this->hungry = false;
    }

    public function isHungry()
    {
        return $this->hungry;
    }
}
