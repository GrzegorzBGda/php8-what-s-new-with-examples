<?php

namespace Example\Classes;

#[Attr('foo')]
/**
 * Instead of PHPDoc annotations, you can now use structured metadata with PHP's native syntax.
 * attribute above informs that class below will have foo field.
 */
class AttributesExample
{
    public string $foo = 'foo';
}