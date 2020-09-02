<?php


namespace Acme\GraphColoring;


use Exception;

/**
 * Class Solution
 * @package Acme\GraphColoring
 */
class Solution implements SolutionInterface
{

    /**
     * @param GraphNode[] $graph
     * @param array $colors
     * @return GraphNode[]
     * @throws Exception
     */
    public function colorGraph(array $graph, array $colors)
    {
        foreach ($graph as $node) {

            if ($node->hasNeighbor($node)) {
                throw new Exception('Legal coloring impossible for node with loop: ' . $node->getLabel());
            }

            // get the node's neighbors' colors, as a set so we
            // can check if a color is illegal in constant time
            $illegalColors = [];

            foreach ($node->getNeighbors() as $neighbor) {
                if ($neighbor->getColor() !== null) {
                    $illegalColors[$neighbor->getColor()] = true;
                }
            }

            // assign the first legal color
            foreach ($colors as $color) {
                if (!isset($illegalColors[$color])) {
                    $node->setColor($color);
                    break;
                }
            }
        }

        return $graph;
    }
}