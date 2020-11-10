<?php

namespace KthToLastNode;

use Acme\KthToLastNode\Solution;
use Acme\KthToLastNode\SolutionInterface;
use Acme\KthToLastNode\Utils;
use PHPUnit\Framework\TestCase;

/**
 * Class SolutionTest
 * @package KthToLastNode
 */
class SolutionTest extends TestCase
{

    /**
     * @var SolutionInterface
     */
    protected SolutionInterface $solution;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        $this->solution = new Solution;
    }


    /**
     *
     */
    public function testKthToLastNode()
    {
        $desc = 'first to last node';
        $nodes = Utils::valuesToLinkedListNodes([1, 2, 3, 4]);
        $k = 1;
        $actual = $this->solution->kthToLastNode($k, $nodes[0]);
        $expected = $nodes[count($nodes) - $k];
        $this->assertEquals($actual, $expected, $desc);
    }
}
