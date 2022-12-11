<?php

declare(strict_types=1);

use Example\Classes\ReadonlyClassExample;
use PHPUnit\Framework\TestCase;

class ReadonlyClassTest extends TestCase
{
    /**
     * @covers Example\Classes\ReadonlyClassExample::__construct()
     */
    public function testShouldCheckThatAttributesAreReadonly(): void
    {
        $readonlyClass = new ReadonlyClassExample(1, 'John');

        self::expectExceptionMessage('Cannot modify readonly property Example\Classes\ReadonlyClassExample::$id');
        $readonlyClass->id = 2;
    }
}