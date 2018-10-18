<?php

require_once __DIR__.'/../vendor/autoload.php';

// public でないメソッドにアクセス可能にするプロキシ化
function unprotect($original)
{
    $proxy = new class($original)
    {
        public function __construct($original)
        {
            $this->original = $original;
        }

        public function __call($method, $args)
        {
            $closure = function ($original, $method, $args) {
                $original->$method(...$args);
            };
            $fn = $closure->bindTo($this->original, $this->original);

            return $fn($this->original, $method, $args);
        }
    };

    return $proxy;
}
