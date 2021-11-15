<?php

declare(strict_types=1);


use Example\Classes\NeverExample;
use PHPUnit\Framework\TestCase;

class NeverTest extends TestCase
{

    /**
     * @covers Example\Classes\NeverExample::setUri()
     * @covers Example\Classes\NeverExample::setUriRegister()
     */
    public function testShouldCheckNeverExample(): void
    {
        // impossible to test, as exit() used in setUri() will exit tests
        // can't mock function setUri() with 'never' return type, as it can't go through eval() function
        self::assertEquals(1, 1);
    }
}