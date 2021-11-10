<?php

declare(strict_types=1);

use Example\Classes\SanerStringToNumberComparisonsExample;
use PHPUnit\Framework\TestCase;

class SanerStringToNumberComparisonsTest extends TestCase
{
    /**
     * @covers Example\Classes\SanerStringToNumberComparisonsExample::isFoobarANumber()
     * @covers Example\Classes\SanerStringToNumberComparisonsExample::isOneANumber()
     */
    public function testShouldCheckSanerStringToNumberComparisons(): void
    {
        $sanerStringToNumberComparisonsExample = new SanerStringToNumberComparisonsExample();

        //Foobar is a string not a number
        self::assertEquals(false, $sanerStringToNumberComparisonsExample->isFoobarANumber(), "Foobar is a stringr");

        //One is a string but php8 will no longer convert it to a number in a fly
        self::assertEquals(false, $sanerStringToNumberComparisonsExample->isOneANumber(), "One is a string");
    }
}