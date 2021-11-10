<?php


namespace Example\Classes;


class ConsistentTypeErrorsForInternalFunctionsExample
{

    public function strlenExample(): int
    {
        return strlen([]);
    }

    public function arrayChunkExample(): array
    {
        return array_chunk([], -1);
    }
}