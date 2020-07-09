<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Event;
use Shopbase\Service\EventService;

class EventServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/EventsList.json');
        $service = new EventService($api);
        $events = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Event::class,
            $events
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Event.json');
        $service = new EventService($api);
        $event = $service->get(1);
        $this->assertInstanceOf(Event::class, $event);
    }
}
