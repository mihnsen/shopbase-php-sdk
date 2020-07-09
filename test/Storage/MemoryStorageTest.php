<?php

namespace Shopbase\Test\Storage;

use Shopbase\Test\TestCase;
use Shopbase\Storage\MemoryStorage;

class MemoryStorageTest extends TestCase
{
    public function testGetSet()
    {
        $storage = new MemoryStorage();
        $storage->set('test', 'test-data');
        $this->assertEquals($storage->get('test'), 'test-data');
    }
}
