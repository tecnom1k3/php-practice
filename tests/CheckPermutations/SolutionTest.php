<?php

namespace CheckPermutations;

use Acme\CheckPermutations\Solution;
use PHPUnit\Framework\TestCase;

/**
 * Class SolutionTest
 * @package CheckPermutations
 */
class SolutionTest extends TestCase
{

    /**
     *
     */
    public function testCheckPermutation()
    {
        $rs = Solution::checkPermutation('abc', 'bca');
        $this->assertTrue($rs);

        $rs = Solution::checkPermutation('abc', 'cba');
        $this->assertTrue($rs);

        $rs = Solution::checkPermutation('abc', 'acb');
        $this->assertTrue($rs);

        $rs = Solution::checkPermutation('abc', 'aac');
        $this->assertFalse($rs);
    }
}
