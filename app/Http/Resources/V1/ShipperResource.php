<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShipperResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'shipperId' => $this->shipper_id,
            'shipperName' => $this->shipper_name,
            'phone' => $this->phone,
            'orders' => OrderResource::collection($this->whenLoaded('orders')),
        ];
    }
}
