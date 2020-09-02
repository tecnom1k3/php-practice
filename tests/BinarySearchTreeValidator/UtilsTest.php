<?php


namespace Acme\Tests\BinarySearchTreeValidator;


use Acme\BinarySearchTreeValidator\BinaryTreeNode;
use Acme\BinarySearchTreeValidator\Utils;
use PHPUnit\Framework\TestCase;

/**
 * Class UtilsTest
 * @package Acme\Tests\BinarySearchTreeValidator
 */
class UtilsTest extends TestCase
{

    /**
     *
     */
    public function test1()
    {
        $desc = 'valid full tree';
        $treeRoot = new BinaryTreeNode(50);
        $leftNode = $treeRoot->insertLeft(30);
        $leftNode->insertLeft(10);
        $leftNode->insertRight(40);
        $rightNode = $treeRoot->insertRight(70);
        $rightNode->insertLeft(60);
        $rightNode->insertRight(80);
        $result = Utils::isBinarySearchTree($treeRoot);
        $this->assertTrue($result, $desc);
    }

    /**
     *
     */
    public function test2()
    {
        $desc = 'out of order linked list';
        $treeRoot = new BinaryTreeNode(50);
        $rightNode = $treeRoot->insertRight(70);
        $rightNode = $rightNode->insertRight(60);
        $rightNode->insertRight(80);
        $result = Utils::isBinarySearchTree($treeRoot);
        $this->assertFalse($result, $desc);
    }

}