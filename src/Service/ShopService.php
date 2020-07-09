<?php

namespace Shopbase\Service;

use Shopbase\Object\Shop;

class ShopService extends AbstractService
{
    /**
     * Receive a single shop
     *
     * @link   https://help.shopify.com/api/reference/shop#show
     * @return Shop
     */
    public function get()
    {
        $request = $this->createRequest('shop.json');
        $response = $this->send($request);
        return $this->createObject(Shop::class, $response['shop']);
    }
}
