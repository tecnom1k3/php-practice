<?php


namespace Acme\SuperbalancedBinaryTree;


/**
 * Class Utils
 * @package Acme\SuperbalancedBinaryTree
 */
class Utils
{

    /**
     * @param BinaryTreeNode $treeRoot
     * @return bool
     */
    public static function isBalanced(BinaryTreeNode $treeRoot)
    {
        // a tree with no nodes is superbalanced, since there are no leaves!
        if (!$treeRoot) {
            return true;
        }

        // we short-circuit as soon as we find more than 2
        $depths = [];

        // nodes will store pairs of a node and the node's depth
        $nodes = [];
        $nodes[] = [$treeRoot, 0];

        while (count($nodes)) {
            // pop a node and its depth from the top of our stack
            $nodePair = array_pop($nodes);
            $node = $nodePair[0];
            $depth = $nodePair[1];

            // case: we found a leaf
            if (!$node->left && !$node->right) {
                // we only care if it's a new depth
                if (array_search($depth, $depths) === false) {
                    $depths[] = $depth;

                    // two ways we might now have an unbalanced tree:
                    //   1) more than 2 different leaf depths
                    //   2) 2 leaf depths that are more than 1 apart
                    if ((count($depths) > 2) ||
                        (count($depths) === 2 && abs($depths[0] - $depths[1]) > 1)) {
                        return false;
                    }
                }
                // case: this isn't a leaf - keep stepping down
            } else {
                if ($node->left) {
                    $nodes[] = [$node->left, $depth + 1];
                }
                if ($node->right) {
                    $nodes[] = [$node->right, $depth + 1];
                }
            }
        }

        return true;
    }

}