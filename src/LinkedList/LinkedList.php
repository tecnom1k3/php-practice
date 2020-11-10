<?php


namespace Acme\LinkedList;


class LinkedList implements LinkedListInterface
{
    /**
     * @var NodeInterface
     */
    protected NodeInterface $head;

    /**
     * LinkedList constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->head = new Node($value);
    }


    /**
     * @inheritDoc
     */
    public function addFirst(int $value): void
    {
        $node = new Node($value);
        $node->setNext($this->head);
        $this->head = $node;
    }

    /**
     * @inheritDoc
     */
    public function addLast(int $value): void
    {
        $node = new Node($value);
        $current = $this->head;

        do {
            $next = $current->getNext();
            if ($next) {
                $current = $next;
            }
        } while ($next);

        $current->setNext($node);
    }

    /**
     * @inheritDoc
     */
    public function removeFirst(): void
    {
        // TODO: Implement removeFirst() method.
    }

    /**
     * @inheritDoc
     */
    public function removeLast(): void
    {
        // TODO: Implement removeLast() method.
    }

    /**
     * @inheritDoc
     */
    public function getFirst(): NodeInterface
    {
        // TODO: Implement getFirst() method.
    }

    /**
     * @inheritDoc
     */
    public function getLast(): NodeInterface
    {
        // TODO: Implement getLast() method.
    }

    /**
     * @inheritDoc
     */
    public function clear(): void
    {
        // TODO: Implement clear() method.
    }

    /**
     * @inheritDoc
     */
    public function size(): int
    {
        // TODO: Implement size() method.
    }
}