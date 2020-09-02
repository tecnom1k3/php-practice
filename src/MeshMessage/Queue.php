<?php


namespace Acme\MeshMessage;


/**
 * Class Queue
 * @package Acme\MeshMessage
 */
class Queue
{
    /**
     * @var array
     */
    private array $queue = [];

    /**
     * @var int
     */
    private int $size = 0;

    /**
     * @param string $item
     */
    public function enqueue(string $item) : void
    {
        $this->queue[] = $item;
        $this->size++;
    }

    /**
     * @return string|null
     */
    public function dequeue() : ?string
    {
        if ($this->size == 0) {
            return null;
        }

        $this->size--;
        return array_shift($this->queue);
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->size;
    }
}