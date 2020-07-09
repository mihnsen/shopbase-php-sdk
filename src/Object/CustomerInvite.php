<?php

namespace Shopbase\Object;

use Shopbase\Enum\Fields\CustomerInviteFields;

class CustomerInvite extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return CustomerInviteFields::getInstance();
    }
}
