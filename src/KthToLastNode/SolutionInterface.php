<?php


namespace Acme\KthToLastNode;


/**
 * Interface SolutionInterface
 * @package Acme\KthToLastNode
 */
interface SolutionInterface
{
    /**
     * @param int $k
     * @param LinkedListNode $head
     * @return LinkedListNode
     */
    public function kthToLastNode(int $k, LinkedListNode $head): LinkedListNode;
}