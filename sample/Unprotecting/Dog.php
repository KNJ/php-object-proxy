<?php

namespace Sample\Unprotecting;

class Dog
{
    use CanUnprotect;

    private $age = 0;

    private function grow($years = 1)
    {
        $this->age += $years;
    }

    public function getAge()
    {
        return $this->age;
    }
}
