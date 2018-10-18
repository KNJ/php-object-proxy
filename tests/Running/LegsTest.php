<?php

declare(strict_types=1);

namespace Tests\Running;

use PHPUnit\Framework\TestCase;

final class LegsTest extends TestCase
{
    public function setUp()
    {
        $legs = new \Sample\Running\Legs;
        $animal = new class extends \Sample\Running\Animal implements \Sample\Running\WithLegs {
            public function legs(): int {
                return 2;
            }
        };
        $this->legs = $legs->represent($animal);
    }

    /**
     * @dataProvider provideSpeedValues
     */
    public function testRunMethod($expected, $speed)
    {
        $this->assertSame($expected, $this->legs->run($speed));
    }

    public function provideSpeedValues()
    {
        return [
            [2, 1],
            [4, 2],
            [8, 4],
            [12, 6],
            [0, 0],
        ];
    }
}
