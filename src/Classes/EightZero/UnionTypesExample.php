<?php


namespace Example\Classes\EightZero;

/**
 * Instead of PHPDoc annotations for a combination of types, you can use native union type declarations that are validated at runtime.
 */
class UnionTypesExample
{
    private int|string $classField;

    /**
     * @param int|string $id
     */
    public function setClassField(int|string $id): void
    {
        $this->classField = $id;
    }

    /**
     * @return int|string
     */
    public function getClassField(): int|string
    {
        return $this->classField;
    }
}