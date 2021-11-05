<?php


namespace Example\Classes;


class ConstructorPropertyPromotionExample
{
    /**
     * ConstructorPropertyPromotionExample constructor.
     *
     * @param float $x
     * @param float $y
     * @param float $z
     */
    public function __construct(public float $x = 0.0, public float $y = 0.0, public float $z = 0.0)
    {
        // Less code to define and initialize properties.
    }
}