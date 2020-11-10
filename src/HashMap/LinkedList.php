<?php


namespace Acme\HashMap;


/**
 * Class LinkedList
 * @package Acme\HashMap
 */
class LinkedList implements LinkedListInterface
{

    /**
     * @var string
     */
    protected string $value;

    /**
     * @var LinkedListInterface|null
     */
    protected ?LinkedListInterface $next;

    /**
     * LinkedList constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
        $this->next = null;
    }


    /**
     * @inheritDoc
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @inheritDoc
     */
    public function getNext(): ?LinkedListInterface
    {
        return $this->next;
    }

    /**
     * @inheritDoc
     */
    public function setNext(LinkedListInterface $linkedList): void
    {
        $this->next = $linkedList;
    }

    /**
     */
    public function shiftValues(): void
    {
        if ($this->next) {
            $this->value = $this->next->getValue();
            $this->next->shiftValues();
        }
    }

    /**
     *
     */
    public function clearNext(): void
    {
        $this->next = null;
    }
}