<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Comment;
use Shopbase\Service\CommentService;

class CommentServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/CommentsList.json');
        $service = new CommentService($api);
        $comments = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Comment::class,
            $comments
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Comment.json');
        $service = new CommentService($api);
        $comment = $service->get(1);
        $this->assertInstanceOf(Comment::class, $comment);
    }
}
