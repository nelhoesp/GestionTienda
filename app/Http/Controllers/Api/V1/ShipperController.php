<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ShipperFilter;
use App\Models\Shipper;
use App\Http\Requests\StoreShipperRequest;
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
        $queryItems = $filter->transform($request); // [['column', 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new ShipperCollection(Shipper::paginate());
        } else {
            $shippers = Shipper::where($queryItems)->paginate();
            return new ShipperCollection($shippers->appends($request->query()));
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipper $shipper)
    {
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
