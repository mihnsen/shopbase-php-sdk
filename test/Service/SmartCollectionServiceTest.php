<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\SmartCollection;
use Shopbase\Service\SmartCollectionService;

class SmartCollectionServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/SmartCollectionsList.json');
        $service = new SmartCollectionService($api);
        $smartCollections = $service->all();
        $this->assertContainsOnlyInstancesOf(
            SmartCollection::class,
            $smartCollections
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/SmartCollection.json');
        $service = new SmartCollectionService($api);
        $smartCollection = $service->get(1234);
        $this->assertInstanceOf(SmartCollection::class, $smartCollection);
    }
}
