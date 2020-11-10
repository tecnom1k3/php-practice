<?php


namespace Acme\LinkedList;


/**
 * Class Node
 * @package Acme\LinkedList
 */
class Node implements NodeInterface
{

    /**
     * @var int
     */
    protected int $value;

    /**
     * @var NodeInterface
     */
    protected NodeInterface $next;

    /**
     * Node constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return NodeInterface
     */
    public function getNext(): NodeInterface
    {
        return $this->next;
    }

    /**
     * @param NodeInterface $next
     * @return NodeInterface
     */
    public function setNext(NodeInterface $next): NodeInterface
    {
        $this->next = $next;
        return $this;
    }

}