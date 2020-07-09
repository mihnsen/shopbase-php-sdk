<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\ScriptTag;
use Shopbase\Service\ScriptTagService;

class ScriptTagServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/ScriptTagsList.json');
        $service = new ScriptTagService($api);
        $scriptTags = $service->all();
        $this->assertContainsOnlyInstancesOf(
            ScriptTag::class,
            $scriptTags
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/ScriptTag.json');
        $service = new ScriptTagService($api);
        $scriptTag = $service->get(1234);
        $this->assertInstanceOf(ScriptTag::class, $scriptTag);
    }
}
