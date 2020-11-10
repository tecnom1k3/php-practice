<?php

namespace Acme\Tests\StringBuilder;

use Acme\StringBuilder\StringBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class StringBuilderTest
 * @package Acme\Tests\StringBuilder
 */
class StringBuilderTest extends TestCase
{

    /**
     *
     */
    public function testToString()
    {
        $sb = new StringBuilder;
        $sb->append('a');
        $rs = $sb->toString();
        $this->assertEquals('a', $rs);
    }

    /**
     *
     */
    public function test2()
    {
        $sb = new StringBuilder;
        $sb->append('a')->append('b')->append('c')->append(1)->append(2)->append(3);
        $rs = $sb->toString();
        $this->assertEquals('abc123', $rs);
    }
}
