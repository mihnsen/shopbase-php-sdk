<?php

namespace Shopbase\Service;

use Shopbase\Object\ShippingZone;
use Shopbase\Exception\ShopbaseSdkException;

class ShippingZoneService extends AbstractService
{
    /**
     * Return a list of shipping zones
     *
     * @link   https://help.shopify.com/api/reference/shipping_zone#index
     * @throws ShopbaseSdkException
     */
    public function all()
    {
        throw new ShopbaseSdkException("ShippingZoneService not implemented");
    }
}
