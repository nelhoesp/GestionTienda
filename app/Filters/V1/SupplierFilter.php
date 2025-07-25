<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class SupplierFilter extends ApiFilter {
    protected $safeParms = [
        'supplierName' => ['eq'],
        'contactName' => ['eq'],
        'address' => ['eq', 'like'],
        'city' => ['eq'],
        'postalCode' => ['eq', 'lt', 'gt'],
        'country' => ['eq'],
        'phone' => ['eq'],
    ];

    protected $columnMap = [
        'supplierName' => 'supplier_name',
        'contactName' => 'contact_name',
        'postalCode' => 'postal_code',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'like' => 'like',
    ];
}