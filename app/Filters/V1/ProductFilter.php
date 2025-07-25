<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class ProductFilter extends ApiFilter {
    protected $safeParms = [
        'productName' => ['eq'],
        'supplierId' => ['eq'],
        'categoryId' => ['eq'],
        'unit' => ['like'],
        'price' => ['eq', 'gt', 'lt', 'gte', 'lte'],
    ];

    protected $columnMap = [
        'productName' => 'product_name',
        'supplierId' => 'supplier_id',
        'categoryId' => 'category_id',
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