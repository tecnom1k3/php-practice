<?php

namespace HashMap;

use Acme\HashMap\HashMap;
use Acme\HashMap\HashMapInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class HashMapTest
 * @package HashMap
 */
class HashMapTest extends TestCase
{

    /**
     * @var HashMap|HashMapInterface
     */
    protected HashMapInterface $hashmap;

    /**
     *
     */
    public function testAdd()
    {
        $rs = $this->hashmap->add('foo')->add('bar');
        $this->assertInstanceOf(HashMapInterface::class, $rs);
    }

    public function testContains()
    {
        $this->hashmap->add('foo');
        $this->assertTrue($this->hashmap->contains('foo'));
        $this->assertFalse($this->hashmap->contains('bar'));
        $this->hashmap->add('bar');
        $this->assertTrue($this->hashmap->contains('foo'));
        $this->assertTrue($this->hashmap->contains('bar'));
        $this->assertFalse($this->hashmap->contains('baz'));
    }

    public function testRemove()
    {
        $this->hashmap->add('foo')->add('bar')->add('baz');
        $this->hashmap->remove('foo');
        $this->assertFalse($this->hashmap->contains('foo'));
    }

    public function testSize()
    {
        $this->hashmap->add('foo')->add('bar')->add('baz');
        $this->assertEquals(3, $this->hashmap->size());
        $this->hashmap->remove('foo');
        $this->assertEquals(2, $this->hashmap->size());
    }

    public function testClear()
    {
        $this->hashmap->add('foo')->add('bar')->add('baz');
        $this->assertEquals(3, $this->hashmap->size());
        $this->hashmap->clear();
        $this->assertEquals(0, $this->hashmap->size());
    }

    /**
     *
     */
    protected function setUp(): void
    {
        $this->hashmap = new HashMap;
    }
}
