<?php

declare(strict_types=1);


namespace EightOne;

use Example\Classes\EightOne\NewInInitializersExample;
use Example\Classes\Helpers\Logger;
use PHPUnit\Framework\TestCase;

class NewInInitializersTest extends TestCase
{

    /**
     * @covers \Example\Classes\EightOne\NewInInitializersExample::__construct()
     */
    public function testShouldCheckNewInInitializers(): void
    {
        $newInInitializersExample = new NewInInitializersExample();

        self::assertInstanceOf(Logger::class, $newInInitializersExample->logger);
    }
}