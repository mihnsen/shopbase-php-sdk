<?php

namespace Shopbase\Test;

use Shopbase\AbstractApi;
use Psr\Log\LoggerInterface;
use GuzzleHttp\Client;

class AbstractApiTest extends TestCase
{
    public function testConstruct()
    {
        $api = new TestableAbstractApi(array(
            'onshopbase_domain' => 'test-domain.myshopbase.com'
        ));
        $this->assertEquals($api->getOnshopbaseDomain(), 'test-domain.myshopbase.com');
    }
}

class TestableAbstractApi extends AbstractApi
{
    public function init() {

    }
}
