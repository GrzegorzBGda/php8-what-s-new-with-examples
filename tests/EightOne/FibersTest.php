<?php

declare(strict_types=1);

namespace EightOne;

use PHPUnit\Framework\TestCase;
use Fiber;

class FibersTest extends TestCase
{

    public function testShouldCheckFibers(): void
    {
        $fiber = new Fiber(function (): void {
            Fiber::suspend('suspended at start');
        });

        $value = $fiber->start();
        self::assertEquals('suspended at start', $value);

        $fiber->resume('resumed');
    }
}