<?php

declare(strict_types=1);

namespace EightOne;

use PHPUnit\Framework\TestCase;

class ArrayUnpackingSupportForStringkeyedArraysTest extends TestCase
{
    public function testShouldCheckArrayUnpackingSupportForStringkeyedArrays(): void
    {
        $arrayA = ['a' => 1];
        $arrayB = ['b' => 2];

        $result = ['a' => 0, ...$arrayA, ...$arrayB];

        self::assertEquals(['a' => 1, 'b' => 2], $result);
    }
}