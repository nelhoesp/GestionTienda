<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'orderDetailId' => $this->order_detail_id,
            'orderId' => $this->order_id,
            'productId' => $this->product_id,
            'productName' => $this->product->product_name ?? 'Desconocido',
            'productUnitPrice' => $this->product->price ?? 0,
            'quantity' => $this->quantity,
            'total' => ($this->product->price ?? 0) * $this->quantity,
        ];
    }
}
