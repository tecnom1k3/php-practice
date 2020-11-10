<?php


namespace Acme\HashMap;


/**
 * Interface LinkedListInterface
 * @package Acme\HashMap
 */
interface LinkedListInterface
{
    /**
     * @return string
     */
    public function getValue(): string;

    /**
     * @return LinkedListInterface
     */
    public function getNext(): ?LinkedListInterface;

    /**
     * @param LinkedListInterface $linkedList
     * @return mixed
     */
    public function setNext(LinkedListInterface $linkedList): void;

    /**
     *
     */
    public function shiftValues(): void;

    /**
     *
     */
    public function clearNext(): void;
}