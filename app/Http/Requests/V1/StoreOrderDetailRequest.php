<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'orderId' => ['required'],
            'productId' => ['required'],
            'quantity' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'order_id' => $this->orderId,
            'product_id' => $this->productId,
        ]);
    }
}
