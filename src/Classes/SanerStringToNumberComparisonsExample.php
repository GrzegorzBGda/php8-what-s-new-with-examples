<?php


namespace Example\Classes;


class SanerStringToNumberComparisonsExample
{
    /**
     * @return bool
     */
    public function isFoobarANumber(): bool
    {
        return 0 == 'foobar';
    }

    /**
     * @return bool
     */
    public function isOneANumber(): bool
    {
        return 1 == 'one';
    }
}