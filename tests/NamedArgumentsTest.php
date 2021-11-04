<?php

declare(strict_types=1);

use Example\Classes\NamedArgumentsExample;
use PHPUnit\Framework\TestCase;

class NamedArgumentsTest extends TestCase
{
    /**
     * @covers Example\Classes\NamedArgumentsExample::calculateTriangleArea()
     */
    public function testShouldCheckNamedArguments(): void
    {
        $namedArgumentsExample = new NamedArgumentsExample();

        //passing arguments in right order
        self::assertEquals("70cm", $namedArgumentsExample->calculateTriangleArea(side: 10, height: 14, unit: "cm"));

        //passing arguments in wrong order
        self::assertEquals("70cm", $namedArgumentsExample->calculateTriangleArea(unit: "cm", height: 14, side: 10));

        //skipping unit parameter, method returns float
        self::assertEquals(70, $namedArgumentsExample->calculateTriangleArea(side: 10, height: 14));
    }
}