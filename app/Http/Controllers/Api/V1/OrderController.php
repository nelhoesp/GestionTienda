<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\OrderFilter;
use App\Models\Order;
use App\Http\Requests\V1\StoreOrderRequest;
use App\Http\Requests\V1\UpdateOrderRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\OrderCollection;
use App\Http\Resources\V1\OrderResource;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new OrderFilter();
        $filterItems = $filter->transform($request); // [['column', 'operator', 'value']]

        $includeOrderDetails = $request->query('includeOrderDetails');

        $orders = Order::where($filterItems);

        if ($includeOrderDetails) {
            $orders = $orders->with('order_details');
        }

        return new OrderCollection($orders->paginate()->appends($request->query()));
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
    public function store(StoreOrderRequest $request)
    {
        return new OrderResource(Order::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order, Request $request)
    {
        $includeOrderDetails = $request->query('includeOrderDetails');
        $includeEmployee = $request->query('includeEmployee');
        $includeShipper = $request->query('includeShipper');

        $relations = [];

        if ($includeOrderDetails) {
            $relations[] = 'order_details.product';
        }

        if ($includeEmployee) {
            $relations[] = 'employee';
        }

        if ($includeShipper) {
            $relations[] = 'shipper';
        }

        return new OrderResource($order->loadMissing($relations));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
