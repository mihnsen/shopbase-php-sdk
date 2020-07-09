<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Location;
use Shopbase\Service\LocationService;

class LocationServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/LocationsList.json');
        $service = new LocationService($api);
        $locations = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Location::class,
            $locations
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Location.json');
        $service = new LocationService($api);
        $location = $service->get(1);
        $this->assertInstanceOf(Location::class, $location);
    }
}
