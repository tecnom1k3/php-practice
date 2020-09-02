<?php


namespace Acme\IslandFinder;


/**
 * Class Solution
 * @package Acme\IslandFinder
 */
class Solution
{
    /**
     * @var array
     */
    protected $visitedCoordinates = [];

    /**
     * @param $input
     * @return int
     */
    public function findIslands(array $input): int
    {
        if (count($input) == 0) {
            return 0;
        }


        $numberOfIslands = 0;

        for ($i = 0; $i < count($input); $i++) {
            for ($j = 0; $j < count($input[$i]); $j++) {
                if ($input[$i][$j] == 1 && !$this->visitedCoordinates[$i][$j]) {
                    $this->exploreIsland($input, $i, $j); //0,0
                    $numberOfIslands++;
                }
            }
        }

        return $numberOfIslands;
    }

    /**
     * @param $input
     * @param $i
     * @param $j
     */
    protected function exploreIsland(array $input, int $i, int $j): void
    {
        //validate valid coordinates
        //check if already visited
        if ($i >= 0 && $i < count($input) && $j >= 0 && $j < count(
                $input[$i]
            ) && !$this->visitedCoordinates[$i][$j] && $input[$i][$j] == 1) {
            $visitedCoordinates[$i][$j] = true; //v[0,0] =true
            $this->exploreIsland($input, $i - 1, $j);
            $this->exploreIsland($input, $i + 1, $j); //v[1,0] =true
            $this->exploreIsland($input, $i, $j - 1);
            $this->exploreIsland($input, $i, $j + 1);
        }
    }
}