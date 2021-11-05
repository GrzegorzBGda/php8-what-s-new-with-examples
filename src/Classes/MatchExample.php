<?php

namespace Example\Classes;


use Exception;

class MatchExample
{
    /**
     * PHP 7.4
     * @param int $number
     * @return string
     * @throws Exception
     */
    public function switchExample(int $number): string
    {
        switch ($number) {
            case 1:
                $numberString = "one";
                break;
            case 2:
                $numberString = "two";
                break;
            case 3:
                $numberString = "three";
                break;
            default:
                throw new Exception('This function can only count to three, sorry');
        }

        return $numberString;
    }

    /**
     * Match is an expression, meaning its result can be stored in a variable or returned.
     *
     * @param int $number
     * @return string
     * @throws Exception
     */
    public function matchExample(int $number): string
    {
        return match ($number) {
            1 => "one",
            2 => "two",
            3 => "three",
            default => throw new Exception('This function can only count to three, sorry'),
        };
    }
}