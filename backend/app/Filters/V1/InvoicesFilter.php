<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

/**
 * Class CustomerQuery
 * @package App\Services
 */
class InvoicesFilter extends ApiFilter
{
    protected $safeParms = [
        'CustomerId' => ['eq'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billDated' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paidDated' => ['eq', 'lt', 'gt', 'lte', 'gte'],
    ];
    protected $columnMap = [
        'CustomerId' => 'customer_id',
        'amount' => 'amount',
        'Status' => 'status',
        'billDated' => 'bill_dated',
        'paidDated' => 'paid_dated',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];

}
