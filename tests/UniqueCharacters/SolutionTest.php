<?php

namespace UniqueCharacters;

use Acme\UniqueCharacters\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    public function testHasUniqueChars()
    {
        $rs = Solution::hasUniqueChars('abc');
        $this->assertTrue($rs);

        $rs = Solution::hasUniqueChars('aac');
        $this->assertFalse($rs);

        $rs = Solution::hasUniqueChars('aca');
        $this->assertFalse($rs);
    }
}
