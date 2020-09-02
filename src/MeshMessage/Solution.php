<?php


namespace Acme\MeshMessage;


use InvalidArgumentException;

class Solution implements SolutionInterface
{
    /**
     * @var Queue
     */
    protected Queue $queue;

    /**
     * Solution constructor.
     * @param Queue $queue
     */
    public function __construct(Queue $queue)
    {
        $this->queue = $queue;
    }

    /**
     * @param array $graph
     * @param string $startNode
     * @param string $endNode
     * @return array|null
     */
    public function getPath(array $graph, string $startNode, string $endNode): ?array
    {
        if (!in_array($startNode, array_keys($graph)) || !in_array($endNode, array_keys($graph))) {
            throw new InvalidArgumentException();
        }

        $this->queue->enqueue($startNode);

        $visitedNodes = [];
        $visitedNodes[$startNode] = $startNode;

        $path = [];
        $path[$startNode] = null;

        $result = [];

        while ($this->queue->count() > 0) {
            $currentItem = $this->queue->dequeue();

            if ($currentItem == $endNode) {
                $result[] = $currentItem;
                $ptr = $path[$currentItem];

                if ($ptr != null) {
                    while ($path[$ptr] != null) {
                        $result[] = $ptr;
                        $ptr = $path[$ptr];
                    }

                    $result[] = $ptr;
                }

                $result = array_reverse($result);
                break;
            }

            foreach ($graph[$currentItem] as $neighbor) {
                if (!isset($visitedNodes[$neighbor])) {
                    $visitedNodes[$neighbor] = $neighbor;
                    $path[$neighbor] = $currentItem;
                    $this->queue->enqueue($neighbor);
                }
            }
        }
        return (count($result) > 0) ? $result : null;
    }
}