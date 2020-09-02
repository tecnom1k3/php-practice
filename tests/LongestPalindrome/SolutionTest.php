<?php

namespace Acme\Tests\LongestPalindrome;

use Acme\LongestPalindrome\Solution;
use PHPUnit\Framework\TestCase;

/**
 * Class SolutionTest
 * @package Acme\Tests\LongestPalindrome
 */
class SolutionTest extends TestCase
{
    /**
     * @var Solution
     */
    protected $solution;

    protected function setUp(): void
    {
        $this->solution = new Solution();
    }

    public function testLongestPalindrome()
    {
        $string = 'adclkjklrt';
        $rs = $this->solution->longestPalindrome($string);
        $this->assertEquals('lkjkl', $rs);
    }
}
