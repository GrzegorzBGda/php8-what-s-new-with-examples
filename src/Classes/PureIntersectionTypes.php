<?php

namespace Example\Classes;

use Traversable;
use Countable;

class PureIntersectionTypes
{
    private Traversable&Countable $countableIterator;

    public function setIterator(Traversable&Countable $countableIterator): void
    {
        $this->countableIterator = $countableIterator;
    }

    public function getIterator(): Traversable&Countable
    {
        return $this->countableIterator;
    }
}