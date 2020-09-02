<?php


namespace Acme\MeshMessage;


/**
 * Interface SolutionInterface
 * @package Acme\MeshMessage
 */
interface SolutionInterface
{
    /**
     * @param array $graph
     * @param string $startNode
     * @param string $endNode
     * @return array|null
     */
    public  function getPath(array $graph, string $startNode, string $endNode) : ?array;
}