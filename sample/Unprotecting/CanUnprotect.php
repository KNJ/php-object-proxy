<?php

namespace Sample\Unprotecting;

trait CanUnprotect
{
    public function unprotect()
    {
        $proxy = new Unprotector;

        return $proxy->represent($this);
    }
}
