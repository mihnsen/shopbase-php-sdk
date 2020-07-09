<?php

namespace Shopbase\Test\Service;

use Shopbase\Test\TestCase;
use Shopbase\Object\ProductImage;
use Shopbase\Service\ProductImageService;

class ProductImageServiceTest extends TestCase
{
    public function testList()
    {
        $api = $this->getApiMock('lists/ProductImagesList.json');
        $service = new ProductImageService($api);
        $images = $service->all(1);
        $this->assertContainsOnlyInstancesOf(
            ProductImage::class,
            $images
        );
    }

    public function testGet()
    {
        $api = $this->getApiMock('objects/ProductImage.json');
        $service = new ProductImageService($api);
        $image = $service->get(1, 2);
        $this->assertInstanceOf(ProductImage::class, $image);
    }
}
