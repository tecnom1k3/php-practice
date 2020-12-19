<?php

namespace ActiveCampaign;

use Acme\ActiveCampaign\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    public function testDoesCircleExist()
    {
        $rs = Solution::doesCircleExist(['G']);
        $this->assertSame(1, count($rs));
        $this->assertSame('NO', $rs[0]);

        $rs = Solution::doesCircleExist(['L']);
        $this->assertSame(1, count($rs));
        $this->assertSame('YES', $rs[0]);

        $rs = Solution::doesCircleExist(['G', 'L']);
        $this->assertSame(2, count($rs));
        $this->assertSame('NO', $rs[0]);
        $this->assertSame('YES', $rs[1]);

        $rs = Solution::doesCircleExist(['GRGL']);
        $this->assertSame(1, count($rs));
        $this->assertSame('NO', $rs[0]);

        $rs = Solution::doesCircleExist(['GGGGR', 'RGL']);
        $this->assertSame(2, count($rs));
        $this->assertSame('YES', $rs[0]);
        $this->assertSame('NO', $rs[1]);
    }
}
