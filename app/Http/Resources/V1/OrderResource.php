<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'orderId' => $this->order_id,
            'customerId' => $this->customer_id,
            'employeeId' => $this->employee_id,
            'orderDate' => $this->order_date,
            'shipperId' => $this->shipper_id,
            'order_details' => OrderDetailResource::collection($this->whenLoaded('order_details')),
            'employee' => $this->whenLoaded('employee', function () {
                return [
                    'firstName' => $this->employee->first_name,
                    'lastName' => $this->employee->last_name,
                ];
            }),
            'shipper' => $this->whenLoaded('shipper', function () {
                return [
                    'shipperName' => $this->shipper->shipper_name
                ];
            })
        ];
    }
}
