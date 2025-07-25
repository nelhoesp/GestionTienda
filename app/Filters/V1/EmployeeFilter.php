<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class EmployeeFilter extends ApiFilter {
    protected $safeParms = [
        'lastName' => ['eq', 'like'],
        'firstName' => ['eq', 'like'],
        'birthDate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
        'photo' => ['eq'],
        'notes' => ['eq', 'like'],
    ];

    protected $columnMap = [
        'lastName' => 'last_name',
        'firstName' => 'first_name',
        'birthDate' => 'birth_date',
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