<?php


namespace Example\Classes;


class NamedArgumentsExample
{
    /**
     * @param float $side
     * @param float $height
     * @param string|null $unit
     * @return float | string
     */
    public function calculateTriangleArea(float $side, float $height, ?string $unit = ''): float|string
    {
        return 0.5 * $side * $height . $unit;
    }
}