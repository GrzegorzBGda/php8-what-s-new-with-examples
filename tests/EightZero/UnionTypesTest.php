<?php

declare(strict_types=1);

namespace EightZero;

use Example\Classes\EightZero\UnionTypesExample;
use PHPUnit\Framework\TestCase;

class UnionTypesTest extends TestCase
{
    /**
     * @covers \Example\Classes\EightZero\UnionTypesExample::getClassField()
     * @covers \Example\Classes\EightZero\UnionTypesExample::setClassField()
     */
    public function testShouldCheckUnionTypes(): void
    {
        $unionTypesExample = new UnionTypesExample();

        //setting integer as class field
        $unionTypesExample->setClassField(1);
        self::assertEquals(1, $unionTypesExample->getClassField());

        //setting string as class field
        $unionTypesExample->setClassField("one");
        self::assertEquals("one", $unionTypesExample->getClassField());
    }
}