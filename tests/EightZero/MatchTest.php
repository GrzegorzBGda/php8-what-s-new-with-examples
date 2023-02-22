<?php

declare(strict_types=1);

namespace EightZero;

use Example\Classes\EightZero\MatchExample;
use PHPUnit\Framework\TestCase;

class MatchTest extends TestCase
{
    /**
     * @covers \Example\Classes\EightZero\AttributesExample::switchExample()
     * @covers \Example\Classes\EightZero\AttributesExample::matchExample()
     */
    public function testShouldCheckMatch(): void
    {
        $matchExample = new MatchExample();

        //switch and match examples work exactly the same
        self::assertEquals('three', $matchExample->switchExample(3));

        self::assertEquals('three', $matchExample->matchExample(3));
    }
}