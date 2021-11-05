<?php

declare(strict_types=1);

use Example\Classes\AttributesExample;
use PHPUnit\Framework\TestCase;

class AttributesTest extends TestCase
{
    /**
     * @covers Example\Classes\AttributesExample::__toString()
     */
    public function testShouldCheckAttributes(): void
    {
        $attributesExample = new AttributesExample();

        self::assertEquals('foo', $attributesExample->foo);
    }
}