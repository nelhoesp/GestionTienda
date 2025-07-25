<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\SupplierFilter;
use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SupplierCollection;
use App\Http\Resources\V1\SupplierResource;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new SupplierFilter();
        $filterItems = $filter->transform($request); // [['column', 'operator', 'value']]

        $includeProducts = $request->query('includeProducts');

        $suppliers = Supplier::where($filterItems);

        if ($includeProducts) {
            $suppliers = $suppliers->with('products');
        }

        return new SupplierCollection($suppliers->paginate()->appends($request->query()));
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
    public function store(StoreSupplierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier, Request $request)
    {
        $includeProducts = $request->query('includeProducts');

        if ($includeProducts) {
            return new SupplierResource($supplier->loadMissing('products'));
        }
        
        return new SupplierResource($supplier);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
