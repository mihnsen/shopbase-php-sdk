<?php

namespace Shopbase\Test\Helper;

use Shopbase\Api;
use Shopbase\Helper\OAuthHelper;
use Shopbase\Test\TestCase;

class OAuthHelperTest extends TestCase
{
    public function setUp()
    {
        $this->api = $this->getApi(array(
            'api_key' => 'api-key',
            'api_secret' => 'api-secret',
            'onshopbase_domain' => 'test.shopbase.com'
        ));
        $this->helper = $this->api->getOAuthHelper();
    }

    public function testInstantiate()
    {
        $this->assertInstanceOf(OAuthHelper::class, $this->helper);
    }

    public function testGetAuthorizationUrl()
    {
        $authUrl = $this->helper->getAuthorizationUrl('http://google.com', 'read_products');
        $chunks = parse_url($authUrl);
        $this->assertEquals($chunks['host'], 'test.shopbase.com');
        $this->assertEquals($chunks['path'], '/admin/oauth/authorize');
        $params = [];
        parse_str($chunks['query'], $params);
        $this->assertEquals($params['client_id'], 'api-key');
        $this->assertEquals(urldecode($params['redirect_uri']), 'http://google.com');
        $this->assertEquals($params['scope'], 'read_products');
        $this->assertNotNull($params['state']);
    }

    public function testGetPseudoRandomString()
    {
        $string = $this->helper->getPseudoRandomString();
        $this->assertEquals(strlen($string), 32);
    }
}
