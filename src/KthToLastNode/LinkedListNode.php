<?php


namespace Acme\KthToLastNode;


/**
 * Class LinkedListNode
 * @package Acme\KthToLastNode
 */
class LinkedListNode
{
    /**
     * @var int
     */
    private int $value;

    /**
     * @var LinkedListNode|null
     */
    private ?LinkedListNode $next = null;

    /**
     * LinkedListNode constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return LinkedListNode|null
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param $next
     */
    public function setNext($next)
    {
        $this->next = $next;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'value: ' . $this->value . ', next: ' . ($this->next ? $this->next->getValue() : 'null');
    }
}