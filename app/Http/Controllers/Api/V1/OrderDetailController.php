<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\OrderDetailFilter;
use App\Models\OrderDetail;
use App\Http\Requests\V1\StoreOrderDetailRequest;
use App\Http\Requests\V1\UpdateOrderDetailRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\OrderDetailCollection;
use App\Http\Resources\V1\OrderDetailResource;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new OrderDetailFilter();
        $queryItems = $filter->transform($request); // [['column', 'operator', 'value']]

        if (count($queryItems) == 0) {
            return new OrderDetailCollection(OrderDetail::paginate());
        } else {
            $order_details = OrderDetail::where($queryItems)->paginate();
            return new OrderDetailCollection($order_details->appends($request->query()));
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
    public function store(StoreOrderDetailRequest $request)
    {
        return new OrderDetailResource(OrderDetail::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDetail $orderDetail)
    {
        return new OrderDetailResource($orderDetail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderDetailRequest $request, OrderDetail $orderDetail)
    {
        $orderDetail->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetail $orderDetail)
    {
        //
    }
}
