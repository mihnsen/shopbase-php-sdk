<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Service\AbandonedCheckoutsService;
use Shopbase\Object\AbandonedCheckout;

class AbandonedCheckoutServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/AbandonedCheckoutsList.json');
        $service = new AbandonedCheckoutsService($api);
        $checkouts = $service->all();
        $this->assertContainsOnlyInstancesOf(
            AbandonedCheckout::class,
            $checkouts
        );
    }
}
