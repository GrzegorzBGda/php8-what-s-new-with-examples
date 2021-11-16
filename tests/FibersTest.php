<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FibersTest extends TestCase
{
    /**
     * @covers Example\Classes\FibersExample::start
     * @covers Example\Classes\FibersExample::suspend
     * @covers Example\Classes\FibersExample::resume
     */
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