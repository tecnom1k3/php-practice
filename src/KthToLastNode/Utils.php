<?php


namespace Acme\KthToLastNode;


/**
 * Class Utils
 * @package Acme\KthToLastNode
 */
class Utils
{
    /**
     * @param int[] $values
     * @return LinkedListNode[]
     */
    public static function valuesToLinkedListNodes(array $values): array
    {
        $nodes = [];
        for ($i = 0; $i < count($values); $i++) {
            $nodes[$i] = new LinkedListNode($values[$i]);
            if ($i > 0) {
                $nodes[$i - 1]->setNext($nodes[$i]);
            }
        }
        return $nodes;
    }

}