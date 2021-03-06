<?php

namespace Fibonacci;

use Acme\Fibonacci\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    /**
     *
     * @dataProvider data
     * @param int $i
     * @param int $expected
     */
    public function testFib(int $i, int $expected)
    {
        $rs = Solution::fib($i);
        $this->assertSame($expected, $rs);
    }

    public function data()
    {
        return [
            [0, 0],
            [1, 1],
            [2, 1],
            [3, 2],
            [4, 3],
            [5, 5],
            [6, 8],
            [7, 13],
            [8, 21],
            [9, 34],
            [10, 55],
            [11, 89],
            [12, 144],
            [13, 233],
            [14, 377],
            [15, 610],
        ];
    }
}
