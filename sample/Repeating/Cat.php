<?php

namespace Sample\Repeating;

class Cat
{
    use CanRepeat;

    public function mew()
    {
        echo 'にゃー';
    }
}
