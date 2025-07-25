<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class OrderFilter extends ApiFilter {
    protected $safeParms = [
        'customerId' => ['eq'],
        'employeeId' => ['eq'],
        'orderDate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'shipperId' => ['eq'],
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'employeeId' => 'employee_id',
        'orderDate' => 'order_date',
        'shipperId' => 'shipper_id',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}