<?php


namespace Example\Classes;

/**
 * Class UnionTypesExample
 * @package Example\Classes
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