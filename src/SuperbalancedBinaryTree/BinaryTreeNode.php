<?php


namespace Acme\SuperbalancedBinaryTree;


/**
 * Class BinaryTreeNode
 * @package Acme\SuperbalancedBinaryTree
 */
class BinaryTreeNode
{
    /**
     * @var
     */
    public $value;
    /**
     * @var BinaryTreeNode
     */
    public $left;
    /**
     * @var BinaryTreeNode
     */
    public $right;

    /**
     * BinaryTreeNode constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $leftValue
     * @return BinaryTreeNode
     */
    public function insertLeft(int $leftValue)
    {
        $this->left = new BinaryTreeNode($leftValue);
        return $this->left;
    }

    /**
     * @param int $rightValue
     * @return BinaryTreeNode
     */
    public function insertRight(int $rightValue)
    {
        $this->right = new BinaryTreeNode($rightValue);
        return $this->right;
    }

}