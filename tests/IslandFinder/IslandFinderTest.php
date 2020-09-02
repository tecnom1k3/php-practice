<?php


namespace Acme\Tests\IslandFinder;


use Acme\IslandFinder\Solution;
use PHPUnit\Framework\TestCase;

/**
 * Class IslandFinderTest
 * @package Acme\Tests\IslandFinder
 */
class IslandFinderTest extends TestCase
{
    /**
     * @var Solution
     */
    protected $islandFinder;

    /**
     *
     */
    protected function setUp():void
    {
        $this->islandFinder = new Solution();
    }

    public function testIslandFinder()
    {
        $input = [
            [1,1,1,0],
            [1,0,0,1],
            [0,1,1,0],
            [1,1,0,0]
        ];
        $rs = $this->islandFinder->findIslands($input);
        $this->assertEquals(3, $rs);
    }


}