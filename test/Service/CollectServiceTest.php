<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Collect;
use Shopbase\Service\CollectService;

class CollectServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/CollectsList.json');
        $service = new CollectService($api);
        $collects = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Collect::class,
            $collects
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Collect.json');
        $service = new CollectService($api);
        $collect = $service->get(1);
        $this->assertInstanceOf(Collect::class, $collect);
    }
}
