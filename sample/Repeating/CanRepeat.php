<?php

namespace Sample\Repeating;

trait CanRepeat
{
    public function repeat($times)
    {
        $proxy = new Repeater;

        return $proxy->represent($this, $times);
    }
}
