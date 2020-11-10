<?php


namespace Acme\RemoveDuplicatesLinkedList;


/**
 * Class LinkedList
 * @package Acme\RemoveDuplicatesLinkedList
 */
class LinkedList
{

    /**
     * @var int
     */
    protected int $value;

    /**
     * @var LinkedList|null
     */
    protected ?LinkedList $next;

    /**
     * LinkedList constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
        $this->next = null;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return LinkedList|null
     */
    public function getNext(): ?LinkedList
    {
        return $this->next;
    }

    /**
     * @param LinkedList|null $next
     * @return LinkedList
     */
    public function setNext(?LinkedList $next): LinkedList
    {
        $this->next = $next;
        return $this;
    }

    /**
     * @param int $value
     * @return LinkedList
     */
    public function add(int $value): LinkedList
    {
        $this->next = new LinkedList($value);
        return $this->next;
    }

}