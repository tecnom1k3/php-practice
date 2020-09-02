<?php

namespace MeshMessage;

use Acme\MeshMessage\Queue;
use Acme\MeshMessage\Solution;
use Acme\MeshMessage\SolutionInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class SolutionTest
 * @package MeshMessage
 */
class SolutionTest extends TestCase
{

    /**
     * @var Solution|SolutionInterface
     */
    private SolutionInterface $solution;

    /**
     *
     */
    public function testGetPath()
    {
        $desc = 'two hop path 1';
        $expected = ["a", "c", "e"];
        $actual = $this->solution->getPath($this->getNetwork(), "a", "e");
        $this->assertEquals($expected, $actual, $desc);
    }

    /**
     *
     */
    public function testGetPath2()
    {
        $desc = 'zero hop path';
        $expected = ["a"];
        $actual = $this->solution->getPath($this->getNetwork(), "a", "a");
        $this->assertEquals($expected, $actual, $desc);
    }

    /**
     * @return string[][]
     */
    private function getNetwork(): array
    {
        return [
            "a" => ["b", "c", "d"],
            "b" => ["a", "d"],
            "c" => ["a", "e"],
            "d" => ["a", "b"],
            "e" => ["c"],
            "f" => ["g"],
            "g" => ["f"],
        ];
    }

    /**
     *
     */
    protected function setUp(): void
    {
        $this->solution = new Solution(new Queue());
    }
}
