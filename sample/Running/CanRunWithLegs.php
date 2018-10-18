<?php

namespace Sample\Running;

trait CanRunWithLegs
{
    public function withLegs()
    {
        $proxy = new Legs;

        return $proxy->represent($this);
    }
}
