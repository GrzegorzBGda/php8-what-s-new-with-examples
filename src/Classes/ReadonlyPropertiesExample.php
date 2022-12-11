<?php

namespace Example\Classes;

class ReadonlyPropertiesExample
{
    public readonly string $status;

    public function __construct(string $status)
    {
        $this->status = $status;
    }
}