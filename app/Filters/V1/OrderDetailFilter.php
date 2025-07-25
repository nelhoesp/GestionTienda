<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class OrderDetailFilter extends ApiFilter {
    protected $safeParms = [
        'quantity' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    ];

    protected $columnMap = [];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}