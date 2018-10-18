<?php

namespace Sample\Judgement;

use Closure;

final class Judge
{
    private $original;

    private $closure;

    // represent は主体のオブジェクトを代理します.
    public function represent($original, Closure $closure)
    {
        $this->original = $original;
        $this->closure = $closure;

        return $this;
    }

    public function __call($method, $args)
    {
        $closure = $this->closure;

        if ($closure($this->original)) {
            $this->original->$method(...$args);
        }
    }
}
