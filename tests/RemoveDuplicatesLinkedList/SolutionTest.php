<?php

namespace RemoveDuplicatesLinkedList;

use Acme\RemoveDuplicatesLinkedList\LinkedList;
use Acme\RemoveDuplicatesLinkedList\Solution;
use PHPUnit\Framework\TestCase;

/**
 * Class SolutionTest
 * @package RemoveDuplicatesLinkedList
 */
class SolutionTest extends TestCase
{

    /**
     *
     */
    public function testRemoveDuplicates()
    {
        $linkedList = new LinkedList(5);
        $linkedList->add(8)->add(5)->add(2)->add(8);
        $newList = Solution::removeDuplicates($linkedList);
        $this->assertNotNull($newList);
    }

    public function testReturnKthToLast()
    {
        $list = new LinkedList(2);
        $list->add(3)->add(4)->add(5)->add(6);
        $kthToLast = Solution::returnKthToLast($list, 3);
        $this->assertSame(4, $kthToLast);
    }
}
