<?php


namespace Acme\HashMap;


/**
 * Class HashMap
 * @package Acme\HashMap
 */
class HashMap implements HashMapInterface
{

    /**
     *
     */
    const CAPACITY = 5;

    /**
     * @var LinkedListInterface[]
     */
    protected array $map = [];

    /**
     * @var int
     */
    protected int $numItems = 0;

    /**
     * @inheritDoc
     */
    public function add(string $value): HashMapInterface
    {
        $linkedListItem = new LinkedList($value);
        $hash = $this->getHash($value);
        if (!isset($this->map[$hash])) {
            $this->map[$hash] = $linkedListItem;
        } else {
            $lastItem = $this->getLastListItemFromMap($hash);
            $lastItem->setNext($linkedListItem);
        }
        $this->numItems++;
        return $this;
    }

    /**
     * @param string $value
     * @return int
     */
    protected function getHash(string $value): int
    {
        $hash = 0;
        $strLength = strlen($value);
        for ($char = 0; $char < $strLength; $char++) {
            $hash += ord($value[$char]);
        }

        return $this->getKey($hash);
    }

    /**
     * @param int $hash
     * @return int
     */
    protected function getKey(int $hash): int
    {
        return $hash % self::CAPACITY;
    }

    /**
     * @param int $key
     * @return LinkedListInterface|null
     */
    protected function getLastListItemFromMap(int $key): ?LinkedListInterface
    {
        if (isset($this->map[$key])) {
            return $this->getLastItemFromList($this->map[$key]);
        }

        return null;
    }

    /**
     * @param LinkedListInterface $linkedList
     * @return LinkedListInterface
     */
    protected function getLastItemFromList(LinkedListInterface $linkedList): LinkedListInterface
    {
        $nextItem = $linkedList->getNext();
        if ($nextItem) {
            return $this->getLastItemFromList($nextItem);
        }
        return $linkedList;
    }

    /**
     * @inheritDoc
     */
    public function contains(string $value): bool
    {
        $key = $this->getHash($value);
        if (isset($this->map[$key])) {
            $listItem = $this->searchForValue($value, $this->map[$key]);
            return $listItem != null;
        }
        return false;
    }

    /**
     * @param string $value
     * @param LinkedListInterface $list
     * @return LinkedListInterface|null
     */
    protected function searchForValue(string $value, LinkedListInterface $list): ?LinkedListInterface
    {
        if ($list->getValue() == $value) {
            return $list;
        }
        if ($list->getNext()) {
            return $this->searchForValue($value, $list->getNext());
        }
        return null;
    }

    /**
     * @inheritDoc
     */
    public function remove(string $value): bool
    {
        $key = $this->getHash($value);
        if (isset($this->map[$key])) {
            $listItem = $this->searchForValue($value, $this->map[$key]);
            if ($listItem) {
                $listItem->shiftValues();
                $this->removeLastLink($this->map[$key]);
                $this->numItems--;
                return true;
            }
        }
        return false;
    }

    /**
     * @param LinkedListInterface $linkedList
     */
    protected function removeLastLink(LinkedListInterface $linkedList): void
    {
        $nextLink = $linkedList->getNext();
        if ($nextLink) {
            $nextNextLink = $nextLink->getNext();
            if (!$nextNextLink) {
                $linkedList->clearNext();
            } else {
                $this->removeLastLink($nextLink);
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function clear()
    {
        $this->map = [];
        $this->numItems = 0;
    }

    /**
     * @inheritDoc
     */
    public function size(): int
    {
        return $this->numItems;
    }
}