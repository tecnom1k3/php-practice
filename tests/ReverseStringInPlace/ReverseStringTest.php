<?php

namespace Acme\Tests\ReverseStringInPlace;

use Acme\ReverseStringInPlace\ReverseString;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{

    public function testReverse()
    {
        $reverse = ReverseString::reverse('654321');
        $this->assertEquals('123456', $reverse);
    }
}
