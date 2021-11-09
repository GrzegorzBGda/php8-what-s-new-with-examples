<?php

declare(strict_types=1);


use Example\Classes\NullsafeExample;
use PHPUnit\Framework\TestCase;

class NullsafeTest extends TestCase
{
    /**
     * @covers Example\Classes\NullsafeExample::getCountryPhp7()
     * @covers Example\Classes\NullsafeExample::getCountryPhp8()
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