<?php

namespace Sample\Repeating;

final class Repeater
{
    private $original;

    private $times;

    // represent は主体のオブジェクトを代理します.
    public function represent($original, $times)
    {
        $this->original = $original;
        $this->times = $times;

        return $this;
    }

    public function __call($method, $args)
    {
        for ($i = 0; $i < $this->times; $i++) {
            $this->original->$method(...$args);
        }
    }
}
