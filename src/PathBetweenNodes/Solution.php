<?php


namespace Acme\PathBetweenNodes;


/**
 * Class Solution
 * @package Acme\PathBetweenNodes
 */
class Solution
{

    /**
     * @param array $graph
     * @param int $start
     * @param int $end
     * @return bool
     */
    public static function pathBetweenNodes(array $graph, int $start, int $end): bool
    {
        $pathExists = false;
        $arrVisited = [];
        $queue = [];
        if (isset($graph[$start])) {
            $arrVisited[] = $start;
            array_push($queue, $start);
            while (count($queue) > 0) {
                $node = array_pop($queue);
                foreach ($graph[$node] as $neighbor) {
                    if (!in_array($neighbor, $arrVisited)) {
                        if ($neighbor != $end) {
                            $arrVisited[] = $neighbor;
                            array_push($queue, $neighbor);
                        } else {
                            $pathExists = true;
                            $queue = [];
                            break;
                        }
                    }
                }
            }
            return $pathExists;
        }
        throw new \InvalidArgumentException();
    }

}