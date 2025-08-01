<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'categoryId' => $this->category_id,
            'categoryName' => $this->category_name,
            'description' => $this->description,
            'products' => ProductResource::collection($this->whenLoaded('products')),
        ];
    }
}
