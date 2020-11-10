<?php

namespace MinHeap;

use Acme\MinHeap\MinHeap;
use PHPUnit\Framework\TestCase;

class MinHeapTest extends TestCase
{

    public function testInsert()
    {
        $heap = new MinHeap();
        $heap->insert(19);
        $heap->insert(36);
        $heap->insert(54);
        $heap->insert(100);
        $heap->insert(17);
        $heap->insert(3);
        $heap->insert(25);
        $heap->insert(1);
        $heap->insert(67);
        $heap->insert(2);
        $heap->insert(7);

        while (!$heap->isEmpty()) {
            var_dump($heap->extract());
        }
    }
}
