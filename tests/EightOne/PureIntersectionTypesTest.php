<?php
declare(strict_types=1);

namespace EightOne;

use Example\Classes\EightOne\PureIntersectionTypesExample;
use Example\Classes\Helpers\CountableAndIteratorExample;
use Example\Classes\Helpers\CountableExample;
use PHPUnit\Framework\TestCase;

class PureIntersectionTypesTest extends TestCase
{

    /**
     * @covers \Example\Classes\EightOne\PureIntersectionTypesExample::setIterator()
     * @covers \Example\Classes\EightOne\PureIntersectionTypesExample::getIterator()
     */
    public function testShouldCheckPureIntersectionTypes(): void
    {
        $pureIntersectionTypes = new PureIntersectionTypesExample();

        $iterator = new CountableAndIteratorExample(); // CountableAndIteratorExample implements two interfaces Iterator, Countable
        $pureIntersectionTypes->setIterator($iterator); // only object implementing both interfaces can be set below
        self::assertEquals($iterator, $pureIntersectionTypes->getIterator());

        $countable = new CountableExample();
        self::expectErrorMessage('Example\Classes\EightOne\PureIntersectionTypesExample::setIterator(): Argument #1 ($countableIterator) must be of type Traversable&Countable');
        $pureIntersectionTypes->setIterator($countable); // will call an error, that object must be of type Traversable&Countable
    }
}