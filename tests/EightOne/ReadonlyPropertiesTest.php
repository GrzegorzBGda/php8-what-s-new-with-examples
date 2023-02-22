<?php

declare(strict_types=1);

namespace EightOne;

use Example\Classes\EightOne\ReadonlyPropertiesExample;
use PHPUnit\Framework\TestCase;

class ReadonlyPropertiesTest extends TestCase
{
    /**
     * @covers Example\Classes\ReadonlyPropertiesExample::__construct()
     */
    public function testShouldCheckThatAttributesAreReadonly(): void
    {
        $readonlyProperties = new ReadonlyPropertiesExample('active');

        self::expectExceptionMessage('Cannot modify readonly property Example\Classes\EightOne\ReadonlyPropertiesExample::$status');
        $readonlyProperties->status = 'inactive';
    }
}