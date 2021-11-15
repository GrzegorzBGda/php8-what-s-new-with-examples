<?php

declare(strict_types=1);

use Example\Classes\EnumsExample;
use Example\Classes\EnumsExampleBacked;
use PHPUnit\Framework\TestCase;

class EnumsTest extends TestCase
{
    /**
     * @covers \Example\Classes\EnumsExampleBacked::sum()
     * @covers \Example\Classes\EnumsExampleBacked::staticSum()
     */
    public function testShouldCheckEnums(): void
    {

        // returning type is enum class itself
        self::assertInstanceOf(EnumsExample::class, EnumsExample::Diamonds);

        // enum's default field is 'name'
        self::assertObjectHasAttribute('name', EnumsExample::Diamonds);

        // enum's name value is case name
        self::assertEquals('Diamonds', EnumsExample::Diamonds->name);



        // returning type is enum class itself
        self::assertInstanceOf(EnumsExampleBacked::class, EnumsExampleBacked::one);

        // backed enum's default fields are 'name' and 'value'
        self::assertObjectHasAttribute('name', EnumsExampleBacked::one);
        self::assertObjectHasAttribute('value', EnumsExampleBacked::one);

        // enum's name value is case name
        self::assertEquals('one', EnumsExampleBacked::one->name);
        self::assertEquals(1, EnumsExampleBacked::one->value);

        // enums can have functions
        self::assertEquals(6, EnumsExampleBacked::staticSum());
        self::assertEquals(6, EnumsExampleBacked::one->sum());
    }





}