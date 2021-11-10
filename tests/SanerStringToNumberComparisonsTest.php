<?php

declare(strict_types=1);

use Example\Classes\SanerStringToNumberComparisonsExample;
use PHPUnit\Framework\TestCase;

class SanerStringToNumberComparisonsTest extends TestCase
{
    /**
     * When comparing to a numeric string, PHP 8 uses a number comparison.
     * Otherwise, it converts the number to a string and uses a string comparison.
     * @covers Example\Classes\SanerStringToNumberComparisonsExample::isFoobarANumber()
     * @covers Example\Classes\SanerStringToNumberComparisonsExample::isOneANumber()
     */
    public function testShouldCheckSanerStringToNumberComparisons(): void
    {
        $sanerStringToNumberComparisonsExample = new SanerStringToNumberComparisonsExample();

        //Foobar is a string not a number
        self::assertEquals(false, $sanerStringToNumberComparisonsExample->isFoobarANumber());

        //'1' is a string but can be converted ina fly into integer
        self::assertEquals(true, $sanerStringToNumberComparisonsExample->isOneANumber());
    }
}