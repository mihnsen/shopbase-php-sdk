<?php

namespace Shopbase\Test\Storage;

use Shopbase\Test\TestCase;
use Shopbase\Storage\SessionStorage;

class SessionStorageTest extends TestCase
{
    public function testGetSet()
    {
        $storage = new SessionStorage();
        $storage->set('test', 'test-data');
        $this->assertEquals($storage->get('test'), 'test-data');
    }
}
