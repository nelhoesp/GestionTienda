<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\EmployeeFilter;
use App\Models\Employee;
use App\Http\Requests\V1\StoreEmployeeRequest;
use App\Http\Requests\V1\UpdateEmployeeRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\EmployeeCollection;
use App\Http\Resources\V1\EmployeeResource;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new EmployeeFilter();
        $filterItems = $filter->transform($request); // [['column', 'operator', 'value']]

        $includeOrders = $request->query('includeOrders');

        $employees = Employee::where($filterItems);

        if ($includeOrders) {
            $employees = $employees->with('orders');
        }
        
        return new EmployeeCollection($employees->paginate()->appends($request->query()));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {
        return new EmployeeResource(Employee::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee, Request $request)
    {
        $includeOrders = $request->query('includeOrders');

        if ($includeOrders) {
            return new EmployeeResource($employee->loadMissing('orders'));
        }
        
        return new EmployeeResource($employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
