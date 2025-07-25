<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class OrderDetailFilter extends ApiFilter {
    protected $safeParms = [
        'orderId' => ['eq'],
        'productId' => ['eq'],
        'quantity' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    ];

    protected $columnMap = [
        'orderId' => 'order_id',
        'productId' => 'product_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}