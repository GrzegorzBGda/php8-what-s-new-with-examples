<?php

namespace Example\Classes\Helpers;

use Iterator;
use Countable;

class CountableAndIteratorExample implements Iterator, Countable
{

    public function count(): int
    {
        // TODO: Implement count() method.
    }

    public function current(): self
    {
        // TODO: Implement current() method.
    }

    public function next(): void
    {
        // TODO: Implement next() method.
    }

    public function key(): float|bool|int|string|null
    {
        // TODO: Implement key() method.
    }

    public function valid(): bool
    {
        // TODO: Implement valid() method.
    }

    public function rewind(): void
    {
        // TODO: Implement rewind() method.
    }
}