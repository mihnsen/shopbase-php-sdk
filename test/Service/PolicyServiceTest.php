<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Service\PolicyService;
use Shopbase\Object\Policy;

class PolicyServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/PoliciesList.json');
        $service = new PolicyService($api);
        $policies = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Policy::class,
            $policies
        );
    }
}
