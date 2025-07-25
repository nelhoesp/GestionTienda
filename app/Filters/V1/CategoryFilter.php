<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class CategoryFilter extends ApiFilter {
    protected $safeParms = [
        'categoryName' => ['eq'],
        'description' => ['eq', 'like'],
    ];

    protected $columnMap = [
        'categoryName' => 'category_name',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'like' => 'like',
    ];
}