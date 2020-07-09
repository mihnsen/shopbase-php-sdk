<?php

namespace Shopbase\Object;

use Shopbase\Enum\Fields\ShippingLineFields;

class ShippingLine extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return ShippingLineFields::getInstance();
    }
}
