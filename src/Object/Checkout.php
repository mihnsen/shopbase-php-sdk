<?php

namespace Shopbase\Object;

use Shopbase\Enum\Fields\CheckoutFields;

class Checkout extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return CheckoutFields::getInstance();
    }
}
