<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\Product;
use Shopbase\Service\ProductService;

class ProductServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/ProductsList.json');
        $service = new ProductService($api);
        $products = $service->all();
        $this->assertContainsOnlyInstancesOf(
            Product::class,
            $products
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/Product.json');
        $service = new ProductService($api);
        $product = $service->get(1);
        $this->assertInstanceOf(Product::class, $product);
    }
}
