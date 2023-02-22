<?php

declare(strict_types=1);

namespace EightOne;

use PHPUnit\Framework\TestCase;

class FirstclassCallableSyntaxTest extends TestCase
{
    public function testShouldCheckFirstclassCallableSyntax(): void
    {
        $toUpperAnonymousFunction = ucwords(...);

        self::assertEquals('Hello World', $toUpperAnonymousFunction('hello world'));
    }
}