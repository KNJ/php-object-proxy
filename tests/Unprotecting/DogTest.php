<?php

declare(strict_types=1);

namespace Tests\Unprotecting;

use PHPUnit\Framework\TestCase;

final class DogTest extends TestCase
{
    public function setUp()
    {
        $this->dog = new \Sample\Unprotecting\Dog;
    }

    public function testGrowMethod()
    {
        // Dog::$age を参照可能にする.
        $age = new \ReflectionProperty(\Sample\Unprotecting\Dog::class, 'age');
        $age->setAccessible(true);

        // private なメソッド Dog::grow() を3回実行して
        // Dog::$age が 0 -> 1 -> 2 -> 3 と増えることをテストする.
        for ($i = 0; $i < 3; $i++) {
            $this->assertSame($i, $age->getValue($this->dog));
            unprotect($this->dog)->grow();
        }

        $this->assertSame(3, $age->getValue($this->dog));
    }
}
