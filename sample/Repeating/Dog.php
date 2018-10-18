<?php

namespace Sample\Repeating;

class Dog
{
    use CanRepeat;

    public function bark()
    {
        echo 'わん';
    }
}
