<?php


namespace Acme\RemoveDuplicatesLinkedList;


/**
 * Class Solution
 * @package Acme\RemoveDuplicatesLinkedList
 */
class Solution
{

    /**
     * @param LinkedList $list
     * @return LinkedList|null
     */
    public static function removeDuplicates(LinkedList $list): ?LinkedList
    {
        $ptr1 = $list;
        $ptr2 = null;
        $arrMap = [];

        while ($ptr1) {
            $value = $ptr1->getValue();
            if (!isset($arrMap[$value])) {
                $arrMap[$value] = true;
                $ptr2 = $ptr1;
                $ptr1 = $ptr1->getNext();
            } else {
                $ptr1 = $ptr1->getNext();
                $ptr2->setNext($ptr1);
            }
        }

        return $list;

    }

    public static function returnKthToLast(LinkedList $list, int $kth): ?int
    {
        $ptr1 = $list;
        $ptr2 = null;
        $cont = 0;

        while ($ptr1) {
            $cont++;
            if ($cont == $kth) {
                $ptr2 = $list;
            }
            $ptr1 = $ptr1->getNext();
            if ($ptr2 && $ptr1) {
                $ptr2 = $ptr2->getNext();
            }
        }

        return $ptr2->getValue();
    }

}