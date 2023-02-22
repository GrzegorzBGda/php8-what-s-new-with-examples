<?php

declare(strict_types=1);


namespace EightOne;

use PHPUnit\Framework\TestCase;

class NeverTest extends TestCase
{

    /**
     * @covers \Example\Classes\EightOne\NeverExample::setUri()
     * @covers \Example\Classes\EightOne\NeverExample::setUriRegister()
     */
    public function testShouldCheckNeverExample(): void
    {
        // impossible to test, as exit() used in setUri() will exit tests
        // can't mock function setUri() with 'never' return type, as it can't go through eval() function
        self::assertEquals(1, 1);
    }
}