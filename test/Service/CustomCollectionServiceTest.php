<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\CustomCollection;
use Shopbase\Service\CustomCollectionService;

class CustomCollectionServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/CustomCollectionsList.json');
        $service = new CustomCollectionService($api);
        $collections = $service->all();
        $this->assertContainsOnlyInstancesOf(
            CustomCollection::class,
            $collections
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/CustomCollection.json');
        $service = new CustomCollectionService($api);
        $collection = $service->get(1);
        $this->assertInstanceOf(CustomCollection::class, $collection);
    }
}
