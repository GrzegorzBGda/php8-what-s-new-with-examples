<?php

declare(strict_types=1);

use Example\Classes\ConsistentTypeErrorsForInternalFunctionsExample;
use PHPUnit\Framework\TestCase;

class ConsistentTypeErrorsForInternalFunctionsTest extends TestCase
{
    /**
     * @covers Example\Classes\ConsistentTypeErrorsForInternalFunctionsExample::strlenExample()
     */
    public function testShouldCheckStrlenExample(): void
    {
        $consistentTypeErrorsForInternalFunctionsExample = new ConsistentTypeErrorsForInternalFunctionsExample();

        //PHP7 error message: strlen() expects parameter 1 to be string, array given
        self::expectErrorMessage('strlen(): Argument #1 ($string) must be of type string, array given');
        $consistentTypeErrorsForInternalFunctionsExample->strlenExample();
    }

    /**
     * @covers Example\Classes\ConsistentTypeErrorsForInternalFunctionsExample::arrayChunkExample()
     */
    public function testShouldCheckArrayChunkExample(): void
    {
        $consistentTypeErrorsForInternalFunctionsExample = new ConsistentTypeErrorsForInternalFunctionsExample();

        //PHP7 error message: array_chunk(): Size parameter expected to be greater than 0
        self::expectErrorMessage('array_chunk(): Argument #2 ($length) must be greater than 0');
        $consistentTypeErrorsForInternalFunctionsExample->arrayChunkExample();
    }
}