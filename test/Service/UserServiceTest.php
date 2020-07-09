<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\User;
use Shopbase\Service\UserService;

class UserServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/UsersList.json');
        $service = new UserService($api);
        $users = $service->all();
        $this->assertContainsOnlyInstancesOf(
            User::class,
            $users
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/User.json');
        $service = new UserService($api);
        $user = $service->get(1234);
        $this->assertInstanceOf(User::class, $user);
    }
}
