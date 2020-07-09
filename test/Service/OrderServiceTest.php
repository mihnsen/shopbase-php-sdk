<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Order;
use Shopbase\Service\OrderService;

class OrderServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/OrdersList.json');
        $service = new OrderService($api);
        $orders = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Order::class,
            $orders
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Order.json');
        $service = new OrderService($api);
        $order = $service->get(1);
        $this->assertInstanceOf(Order::class, $order);
    }
}
