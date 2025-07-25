<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'supplierId' => $this->supplier_id,
            'supplierName' => $this->supplier_name,
            'contactName' => $this->contact_name,
            'address' => $this->address,
            'city' => $this->city,
            'postalCode' => $this->postal_code,
            'country' => $this->country,
            'phone' => $this->phone,
        ];
    }
}
