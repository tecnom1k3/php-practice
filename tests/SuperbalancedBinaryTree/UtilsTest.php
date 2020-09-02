<?php

namespace Acme\Tests\SuperbalancedBinaryTree;

use Acme\SuperbalancedBinaryTree\BinaryTreeNode;
use Acme\SuperbalancedBinaryTree\Utils;
use PHPUnit\Framework\TestCase;

/**
 * Class UtilsTest
 * @package Acme\Tests\SuperbalancedBinaryTree
 */
class UtilsTest extends TestCase
{

    /**
     *
     */
    public function testFullTree()
    {
        $treeRoot = new BinaryTreeNode(5);
        $leftNode = $treeRoot->insertLeft(8);
        $leftNode->insertLeft(1);
        $leftNode->insertRight(2);
        $rightNode = $treeRoot->insertRight(6);
        $rightNode->insertLeft(3);
        $rightNode->insertRight(4);

        $result = Utils::isBalanced($treeRoot);
        $this->assertTrue($result);
    }

    /**
     *
     */
    public function testLeavesSameDepth()
    {
        $treeRoot = new BinaryTreeNode(3);
        $leftNode = $treeRoot->insertLeft(4);
        $leftNode->insertLeft(1);
        $rightNode = $treeRoot->insertRight(6);
        $rightNode->insertRight(9);

        $result = Utils::isBalanced($treeRoot);
        $this->assertTrue($result);
    }

    /**
     *
     */
    public function testLeafHeightsDifferByOne()
    {
        $treeRoot = new BinaryTreeNode(1);
        $leftNode = $treeRoot->insertLeft(5);
        $rightNode = $treeRoot->insertRight(9);
        $rightNode->insertLeft(8)->insertLeft(7);
        $rightNode->insertRight(5);

        $result = Utils::isBalanced($treeRoot);
        $this->assertTrue($result);
    }
}
