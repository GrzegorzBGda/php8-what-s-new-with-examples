<?php

declare(strict_types=1);

use Example\Classes\ReadonlyPropertiesExample;
use PHPUnit\Framework\TestCase;

class ReadonlyPropertiesTest extends TestCase
{
    /**
     * @covers Example\Classes\ReadonlyPropertiesExample::__construct()
     */
    public function testShouldCheckThatAttributesAreReadonly(): void
    {
        $readonlyProperties = new ReadonlyPropertiesExample('active');

        self::expectExceptionMessage('Cannot modify readonly property Example\Classes\ReadonlyPropertiesExample::$status');
        $readonlyProperties->status = 'inactive';
    }
}