<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Shop;
use Shopbase\Service\ShopService;

class ShopServiceTest extends TestCase
{
    public function testGet()
    {
        $api = $this->getApiMock('objects/Shop.json');
        $service = new ShopService($api);
        $shop = $service->get(1234);
        $this->assertInstanceOf(Shop::class, $shop);
    }
}
