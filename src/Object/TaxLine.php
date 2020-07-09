<?php

namespace Shopbase\Object;

use Shopbase\Enum\Fields\TaxLineFields;

class TaxLine extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return TaxLineFields::getInstance();
    }
}
