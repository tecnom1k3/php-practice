<?php


namespace Acme\HashMap;


/**
 * Interface HashMapInterface
 * @package Acme\HashMap
 */
interface HashMapInterface
{
    /**
     * @param string $value
     * @return HashMapInterface
     */
    public function add(string $value): HashMapInterface;

    /**
     * @param string $value
     * @return bool
     */
    public function contains(string $value): bool;

    /**
     * @param string $value
     * @return bool
     */
    public function remove(string $value): bool;

    /**
     * @return mixed
     */
    public function clear();

    /**
     * @return int
     */
    public function size(): int;
}