<?php

namespace Sample\Judgement;

use Closure;

trait CanJudge
{
    public function when(Closure $closure)
    {
        $proxy = new Judge;

        return $proxy->represent($this, $closure);
    }
}
