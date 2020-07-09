<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Blog;
use Shopbase\Service\BlogService;

class BlogServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/BlogsList.json');
        $service = new BlogService($api);
        $blogs = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Blog::class,
            $blogs
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Blog.json');
        $service = new BlogService($api);
        $blog = $service->get(1);
        $this->assertInstanceOf(Blog::class, $blog);
    }
}
