<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class ProductFilter extends ApiFilter {
    protected $safeParms = [
        'productName' => ['eq'],
        'unit' => ['like'],
        'price' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'productName' => 'product_name',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'like' => 'like',
    ];
}