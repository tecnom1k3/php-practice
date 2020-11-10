<?php


namespace Acme\LinkedList;


interface NodeInterface
{

    /**
     * @param NodeInterface $next
     * @return NodeInterface
     */
    public function setNext(NodeInterface $next): NodeInterface;

    /**
     * @return NodeInterface
     */
    public function getNext(): NodeInterface;

    /**
     * @return int
     */
    public function getValue(): int;
}