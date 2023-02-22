<?php

declare(strict_types=1);


namespace EightOne;

use PHPUnit\Framework\TestCase;

class ExplicitOctalNumeralNotationTest extends TestCase
{
    public function testShouldCheckExplicitOctalNumeralNotation(): void
    {
        self::assertNotEquals(16, 0o16);
        self::assertEquals(14, 0o16);
    }
}