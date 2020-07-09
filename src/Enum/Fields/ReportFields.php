<?php

namespace Shopbase\Enum\Fields;

class ReportFields extends AbstractObjectEnum
{
    const CATEGORY = 'category';
    const ID = 'id';
    const NAME = 'name';
    const SHOPBASE_QL = 'shopbase_ql';
    const UPDATED_AT = 'updated_at';

    public function getFieldTypes()
    {
        return array(
            'category' => 'string',
            'id' => "integer",
            'name' => "string",
            'shopbase_ql' => 'string',
            'updated_at' => 'DateTime'
        );
    }
}
