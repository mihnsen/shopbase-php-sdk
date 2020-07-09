<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Refund;
use Shopbase\Service\RefundService;

class RefundServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/RefundsList.json');
        $service = new RefundService($api);
        $refunds = $service->all(1);
        $this->assertContainsOnlyInstancesOf(
            Refund::class,
            $refunds
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Refund.json');
        $service = new RefundService($api);
        $refund = $service->get(1, 1234);
        $this->assertInstanceOf(Refund::class, $refund);
    }
}
