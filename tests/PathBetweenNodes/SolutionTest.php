<?php

namespace PathBetweenNodes;

use Acme\PathBetweenNodes\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    public function testPathBetweenNodes()
    {
        $arrGraph[1] = [2,5];
        $arrGraph[2] = [1,3,4];
        $arrGraph[3] = [2];
        $arrGraph[4] = [2,5,7];
        $arrGraph[5] = [1,4,6,7];
        $arrGraph[6] = [5];
        $arrGraph[7] = [4,5];

        $this->assertTrue(Solution::pathBetweenNodes($arrGraph, 1, 7));
        $this->assertFalse(Solution::pathBetweenNodes($arrGraph, 1, 8));
    }
}
