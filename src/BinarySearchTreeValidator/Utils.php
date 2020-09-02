<?php


namespace Acme\BinarySearchTreeValidator;


/**
 * Class Utils
 * @package Acme\BinarySearchTreeValidator
 */
class Utils
{
    /**
     * @param BinaryTreeNode $treeRoot
     * @return bool
     */
    public static function isBinarySearchTree(BinaryTreeNode $treeRoot): bool
    {
        $arr = [];
        return self::walk($treeRoot, $arr);
    }

    /**
     * @param BinaryTreeNode $node
     * @param array $arr
     * @return bool
     */
    private static function walk(BinaryTreeNode $node, array &$arr): bool
    {
        if ($node->left && !self::walk($node->left, $arr)) {
            return false;
        }

        if (count($arr) > 0 && $node->value <= $arr[count($arr) - 1]) {
            return false;
        }
        $arr[] = $node->value;

        if ($node->right && !self::walk($node->right, $arr)) {
            return false;
        }

        return true;
    }
}