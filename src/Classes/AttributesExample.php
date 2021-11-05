<?php

namespace Example\Classes;

#[Attr('foo')]
/**
 * attribute above informs that class below will have foo field
 */
class AttributesExample
{
    public string $foo = 'foo';
}