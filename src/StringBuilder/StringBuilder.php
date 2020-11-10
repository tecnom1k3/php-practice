<?php


namespace Acme\StringBuilder;


class StringBuilder implements StringBuilderInterface
{

    protected array $internalArray = [];

    /**
     * @inheritDoc
     */
    function append(string $string): StringBuilderInterface
    {
        array_push($this->internalArray, $string);
        return $this;
    }

    /**
     * @inheritDoc
     */
    function toString(): string
    {
        return implode('', $this->internalArray);
    }
}