<?php


namespace Acme\GraphColoring;


/**
 * Class Utils
 * @package Acme\GraphColoring
 */
class Utils
{
    /**
     * @return string[]
     */
    public static function getColors()
    {
        return ["red", "green", "blue", "orange", "yellow", "white"];
    }

    /**
     * @param GraphNode[] $graph
     * @return bool
     */
    public static function validateGraphColoring(array $graph)
    {
        foreach ($graph as $node) {
            if (!$node->getColor()) {
                return false;
            }
        }

        $maxDegree = 0;
        $usedColors = [];

        foreach ($graph as $node) {
            $neighbors = $node->getNeighbors();
            $maxDegree = max($maxDegree, count($neighbors));
            $usedColors[$node->getColor()] = $node->getColor();
        }

        $allowedColorCount = $maxDegree + 1;

        if (count($usedColors) > $allowedColorCount) {
            return false;
        }

        foreach ($graph as $node) {
            $neighbors = $node->getNeighbors();
            foreach ($neighbors as $neighbor) {
                if ($neighbor->getColor() == $node->getColor()) {
                    return false;
                }
            }
        }

        return true;
    }
}