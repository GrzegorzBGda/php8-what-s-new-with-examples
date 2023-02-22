<?php

declare(strict_types=1);


namespace EightZero;

use Example\Classes\EightZero\NullsafeExample;
use PHPUnit\Framework\TestCase;

class NullsafeTest extends TestCase
{
    /**
     * @covers \Example\Classes\EightZero\NullsafeExample::getCountryPhp7()
     * @covers \Example\Classes\EightZero\NullsafeExample::getCountryPhp8()
     */
    public function testShouldCheckNullsafe(): void
    {
        $nullsafeExample = new NullsafeExample();

        self::assertEquals('Poland', $nullsafeExample->getCountryPhp7());
        self::assertEquals('Poland', $nullsafeExample->getCountryPhp8());

        $nullsafeExample->session->user->address->country = null;
        self::assertEquals(null, $nullsafeExample->getCountryPhp7());
        self::assertEquals(null, $nullsafeExample->getCountryPhp8());

    }
}