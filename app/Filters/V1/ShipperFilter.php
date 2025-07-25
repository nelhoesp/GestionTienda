<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class ShipperFilter extends ApiFilter {
    protected $safeParms = [
        'shipperName' => ['eq'],
        'phone' => ['eq'],
    ];

    protected $columnMap = [
        'shipperName' => 'shipper_name',
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];
}