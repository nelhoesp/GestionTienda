<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class OrderFilter extends ApiFilter {
    protected $safeParms = [
        'orderDate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'orderDate' => 'order_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}