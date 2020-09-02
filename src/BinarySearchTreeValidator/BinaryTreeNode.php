<?php


namespace Acme\BinarySearchTreeValidator;


/**
 * Class BinaryTreeNode
 * @package Acme\BinarySearchTreeValidator
 */
class BinaryTreeNode
{
    /**
     * @var int
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
    public function insertLeft(int $leftValue): BinaryTreeNode
    {
        $this->left = new BinaryTreeNode($leftValue);
        return $this->left;
    }

    /**
     * @param int $rightValue
     * @return BinaryTreeNode
     */
    public function insertRight(int $rightValue): BinaryTreeNode
    {
        $this->right = new BinaryTreeNode($rightValue);
        return $this->right;
    }
}