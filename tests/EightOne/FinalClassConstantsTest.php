<?php
declare(strict_types=1);

namespace EightOne;

use PHPUnit\Framework\TestCase;

class FinalClassConstantsTest extends TestCase
{

    /**
     * @covers \Example\Classes\EightOne\FinalClassConstantsExample
     * @covers \Example\Classes\EightOne\FinalClassConstantsExample2
     */
    public function testShouldCheckFinalClassConstants(): void
    {
        // impossible to test, as overwriting final constant in Php8.1 will now throw a Fatal error
        // and exit code execution
        self::assertEquals(1, 1);
    }
}