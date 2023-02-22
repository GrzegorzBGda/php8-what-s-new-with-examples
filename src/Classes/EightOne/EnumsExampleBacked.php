<?php

namespace Example\Classes\EightOne;

enum EnumsExampleBacked: int
{
    case one = 1;
    case two = 2;
    case three = 3;

    /**
     * @return int
     */
    public function sum(): int
    {
        return self::one->value + self::two->value + self::three->value;
    }

    /**
     * @return int
     */
    public static function staticSum(): int
    {
        return self::one->value + self::two->value + self::three->value;
    }
}