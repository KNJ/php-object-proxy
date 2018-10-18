<?php

namespace Sample\Running;

final class Legs
{
    private $animal;

    // represent は主体のオブジェクトを代理します.
    public function represent(WithLegs $animal)
    {
        $this->animal = $animal;

        return $this;
    }

    // これが実質 Animal::run() のオーバーライドになります.
    public function run($speed = 1)
    {
        $legs = $this->animal->legs();

        return $this->animal->run($speed * $legs);
    }
}
