<?php

namespace Shopbase\Object;

use Shopbase\Enum\Fields\CollectionListingFields;

class CollectionListing extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return CollectionListingFields::getInstance();
    }
}
