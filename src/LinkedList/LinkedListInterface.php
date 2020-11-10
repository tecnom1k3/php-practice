<?php


namespace Acme\LinkedList;


/**
 * Interface LinkedListInterface
 * @package Acme\LinkedList
 */
interface LinkedListInterface
{

    /**
     * @param int $value
     */
    public function addFirst(int $value): void;

    /**
     * @param int $value
     */
    public function addLast(int $value): void;

    /**
     *
     */
    public function removeFirst(): void;

    /**
     *
     */
    public function removeLast(): void;

    /**
     * @return NodeInterface
     */
    public function getFirst(): NodeInterface;

    /**
     * @return NodeInterface
     */
    public function getLast(): NodeInterface;

    /**
     *
     */
    public function clear(): void;

    /**
     * @return int
     */
    public function size(): int;
}