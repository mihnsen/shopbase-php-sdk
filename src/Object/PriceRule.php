<?php

namespace Shopbase\Object;

use Shopbase\Enum\Fields\PriceRuleFields;

class PriceRule extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return PriceRuleFields::getInstance();
    }
}
