<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ShipperFilter;
use App\Models\Shipper;
use App\Http\Requests\V1\StoreShipperRequest;
use App\Http\Requests\UpdateShipperRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ShipperCollection;
use App\Http\Resources\V1\ShipperResource;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ShipperFilter();
        $filterItems = $filter->transform($request); // [['column', 'operator', 'value']]

        $includeOrders = $request->query('includeOrders');

        $shippers = Shipper::where($filterItems);

        if ($includeOrders) {
            $shippers = $shippers->with('orders');
        }

        return new ShipperCollection($shippers->paginate()->appends($request->query()));
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
    public function store(StoreShipperRequest $request)
    {
        return new ShipperResource(Shipper::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipper $shipper, Request $request)
    {
        $includeOrders = $request->query('includeOrders');

        if ($includeOrders) {
            return new ShipperResource($shipper->loadMissing('orders'));
        }
        
        return new ShipperResource($shipper);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shipper $shipper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShipperRequest $request, Shipper $shipper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shipper $shipper)
    {
        //
    }
}
