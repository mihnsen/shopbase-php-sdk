<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\MarketingEvent;
use Shopbase\Service\MarketingEventService;

class MarketingEventServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/MarketingEventsList.json');
        $service = new MarketingEventService($api);
        $events = $service->all();
        $this->assertContainsOnlyInstancesOf(
            MarketingEvent::class,
            $events
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/MarketingEvent.json');
        $service = new MarketingEventService($api);
        $event = $service->get(1);
        $this->assertInstanceOf(MarketingEvent::class, $event);
    }
}
