<?php

namespace Sample\Unprotecting;

final class Unprotector
{
    private $original;

    // represent は主体のオブジェクトを代理します.
    public function represent($original)
    {
        $this->original = $original;

        return $this;
    }

    public function __call($method, $args)
    {
        $closure = function ($original, $method, $args) {
            $original->$method(...$args);
        };
        $fn = $closure->bindTo($this->original, $this->original);

        return $fn($this->original, $method, $args);
    }
}
