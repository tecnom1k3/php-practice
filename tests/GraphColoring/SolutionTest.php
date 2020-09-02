<?php

namespace Acme\Tests\GraphColoring;

use Acme\GraphColoring\GraphNode;
use Acme\GraphColoring\Solution;
use Acme\GraphColoring\SolutionInterface;
use Acme\GraphColoring\Utils;
use PHPUnit\Framework\TestCase;

/**
 * Class SolutionTest
 * @package Acme\Tests\GraphColoring
 */
class SolutionTest extends TestCase
{
    /**
     * @var SolutionInterface
     */
    private SolutionInterface $solution;

    /**
     *
     */
    protected function setUp(): void
    {
        $this->solution = new Solution;
    }


    /**
     * @throws \Exception
     */
    public function testColorGraph()
    {
        $desc = 'line graph';
        $a = new GraphNode('a');
        $b = new GraphNode('b');
        $c = new GraphNode('c');
        $d = new GraphNode('d');
        $a->addNeighbor($b);
        $b->addNeighbor($a);
        $b->addNeighbor($c);
        $c->addNeighbor($b);
        $c->addNeighbor($d);
        $d->addNeighbor($c);
        $graph = [$a, $b, $c, $d];
        $this->solution->colorGraph($graph, Utils::getColors());
        $result = Utils::validateGraphColoring($graph);
        $this->assertTrue($result, $desc);
    }
}
