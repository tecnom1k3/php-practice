<?php


namespace Acme\GraphColoring;


/**
 * Interface SolutionInterface
 * @package Acme\GraphColoring
 */
interface SolutionInterface
{
    /**
     * @param GraphNode[] $graph
     * @param array $colors
     * @return mixed
     */
    public function colorGraph(array $graph, array $colors);
}