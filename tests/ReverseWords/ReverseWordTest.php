<?php

namespace Acme\Tests\ReverseWords;

use Acme\ReverseWords\ReverseWord;
use PHPUnit\Framework\TestCase;

/**
 * Class ReverseWordTest
 * @package Acme\Tests\ReverseWords
 */
class ReverseWordTest extends TestCase
{

    public function testReverseEmpty()
    {
        $phrase = '';
        $rs = ReverseWord::reverse($phrase);
        $this->assertEquals('', $rs);
    }

    public function testReverse2Words()
    {
        $phrase = 'fizz buzz';
        $rs = ReverseWord::reverse($phrase);
        $this->assertEquals('buzz fizz', $rs);
    }
}
