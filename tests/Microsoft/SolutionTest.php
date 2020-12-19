<?php

namespace Microsoft;

use Acme\Microsoft\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    protected Solution $solution;

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        $this->solution = new Solution();
    }

    public function testSum2DigitsArray()
    {
        $input = [1,1000,80,-91];

        $rs = $this->solution->sum2digitNumbers($input);

        $this->assertEquals(-11, $rs);



        $this->assertEquals(182, $this->solution->sum2digitNumbers([47,1900, 1,90,45]));
        $this->assertEquals(32, $this->solution->sum2digitNumbers([-13,1900,1,100,45]));

        $this->assertEquals(-11, $this->solution->sum2digitNumbers([1,1000,80,-91]));
        $this->assertEquals(null, $this->solution->sum2digitNumbers(['a', 'b']));
        $this->assertEquals(null, $this->solution->sum2digitNumbers([]));
        $this->assertEquals(10, $this->solution->sum2digitNumbers(['a', 10]));
    }

    public function testFixBug()
    {
        $this->assertSame('l', $this->solution->fixBug('hello'));
        $this->assertSame('d', $this->solution->fixBug('arrdd'));
        $this->assertSame('f', $this->solution->fixBug('zzaaffff'));
        $this->assertSame(null, $this->solution->fixBug(''));
        $this->assertSame('a', $this->solution->fixBug('a'));
        $this->assertSame('b', $this->solution->fixBug('b'));
    }

    public function testIntegerSum()
    {
        for($val=1; $val <= 100; $val++) {
            $rs = $this->solution->integersSum0($val);
            $this->assertSame($val, count($rs));
            $this->assertSame(0, array_sum($rs));
        }

    }


}
