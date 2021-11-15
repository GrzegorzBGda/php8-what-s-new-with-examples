<?php
declare(strict_types=1);

use Example\Classes\Helpers\CountableExample;
use Example\Classes\PureIntersectionTypes;
use Example\Classes\Helpers\CountableAndIteratorExample;
use PHPUnit\Framework\TestCase;

class PureIntersectionTypesTest extends TestCase
{

    /**
     * @covers Example\Classes\PureIntersectionTypes::setIterator()
     * @covers Example\Classes\PureIntersectionTypes::getIterator()
     */
    public function testShouldCheckPureIntersectionTypes(): void
    {
        $pureIntersectionTypes = new PureIntersectionTypes();

        $iterator = new CountableAndIteratorExample(); // CountableAndIteratorExample implements two interfaces Iterator, Countable
        $pureIntersectionTypes->setIterator($iterator); // only object implementing both interfaces can be set below
        self::assertEquals($iterator, $pureIntersectionTypes->getIterator());

        $countable = new CountableExample();
        self::expectErrorMessage('Example\Classes\PureIntersectionTypes::setIterator(): Argument #1 ($countableIterator) must be of type Traversable&Countable, Example\Classes\Helpers\CountableExample given, called in /opt/project/tests/PureIntersectionTypesTest.php on line 26');
        $pureIntersectionTypes->setIterator($countable); // will call an error, that object must be of type Traversable&Countable
    }
}