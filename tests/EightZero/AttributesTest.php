<?php

declare(strict_types=1);

namespace EightZero;

use Example\Classes\EightZero\AttributesExample;
use PHPUnit\Framework\TestCase;

class AttributesTest extends TestCase
{
    /**
     * @covers \Example\Classes\EightZero\AttributesExample::__toString()
     */
    public function testShouldCheckAttributes(): void
    {
        $attributesExample = new AttributesExample();

        self::assertEquals('foo', $attributesExample->foo);
    }
}