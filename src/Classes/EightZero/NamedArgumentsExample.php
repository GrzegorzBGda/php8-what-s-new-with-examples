<?php


namespace Example\Classes\EightZero;


class NamedArgumentsExample
{
    /**
     * Specify only required parameters, skipping optional ones.
     * Arguments are order-independent and self-documented.
     *
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