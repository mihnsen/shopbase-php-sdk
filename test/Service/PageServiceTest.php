<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Page;
use Shopbase\Service\PageService;

class PageServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/PagesList.json');
        $service = new PageService($api);
        $pages = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Page::class,
            $pages
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Page.json');
        $service = new PageService($api);
        $page = $service->get(1);
        $this->assertInstanceOf(Page::class, $page);
    }
}
