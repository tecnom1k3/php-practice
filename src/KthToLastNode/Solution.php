<?php


namespace Acme\KthToLastNode;


class Solution implements SolutionInterface
{

    /**
     * @inheritDoc
     */
    public function kthToLastNode(int $k, LinkedListNode $head): LinkedListNode
    {
        $ptrKth = $head;
        $ptrCounter = 0 - $k;

        while ($head->getNext()) {
            $head = $head->getNext();
            $ptrCounter++;
            if ($ptrCounter >= 0) {
                $ptrKth = $ptrKth->getNext();
            }
        }

        return $ptrKth;
    }
}