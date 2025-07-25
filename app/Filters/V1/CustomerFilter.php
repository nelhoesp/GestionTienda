<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter {
    protected $safeParms = [
        'customerName' => ['eq'],
        'contactName' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt'],
        'country' => ['eq'],
    ];

    protected $columnMap = [
        'customerName' => 'customer_name',
        'contactName' => 'contact_name',
        'postalCode' => 'postal_code',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}