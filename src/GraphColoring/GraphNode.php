<?php


namespace Acme\GraphColoring;


/**
 * Class GraphNode
 * @package Acme\GraphColoring
 */
class GraphNode
{
    /**
     * @var string
     */
    private $label = null;
    /**
     * @var array
     */
    private $neighbors = [];
    /**
     * @var string
     */
    private $color = null;

    /**
     * GraphNode constructor.
     * @param $label
     */
    public function __construct(string $label)
    {
        $this->label = $label;
        $this->neighbors = [];
        $this->color = null;
    }

    /**
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return array
     */
    public function getNeighbors()
    {
        return $this->neighbors;
    }

    /**
     * @param $neighbor
     */
    public function addNeighbor(GraphNode $neighbor)
    {
        $this->neighbors[$neighbor->getLabel()] = $neighbor;
    }

    /**
     * @param $neighbor
     * @return bool
     */
    public function hasNeighbor($neighbor)
    {
        return isset($this->neighbors[$neighbor->getLabel()]);
    }

    /**
     * @return string|null
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}