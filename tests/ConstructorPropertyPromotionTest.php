<?php

declare(strict_types=1);

use Example\Classes\ConstructorPropertyPromotionExample;
use PHPUnit\Framework\TestCase;

class ConstructorPropertyPromotionTest extends TestCase
{
    /**
     * @covers Example\Classes\ConstructorPropertyPromotionExample::__toString()
     */
    public function testShouldCheckConstructorPropertyPromotion(): void
    {
        $constructorPropertyPromotion = new ConstructorPropertyPromotionExample(x: 1, y: 2, z: 3);

        //checking that x is set
        self::assertEquals(1, $constructorPropertyPromotion->x);

        //checking that y is set
        self::assertEquals(2, $constructorPropertyPromotion->y);

        //checking that z is set
        self::assertEquals(3, $constructorPropertyPromotion->z);
    }
}