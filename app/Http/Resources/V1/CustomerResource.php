<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'customerId' => $this->customer_id,
            'customerName' => $this->customer_name,
            'contactName' => $this->contact_name,
            'address' => $this->address,
            'city' => $this->city,
            'postalCode' => $this->postal_code,
            'country' => $this->country,
            'orders' => OrderResource::collection($this->whenLoaded('orders')),
        ];
    }
}
