<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderDetailRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'orderId' => ['required'],
                'productId' => ['required'],
                'quantity' => ['required'],
            ];
        } else {
            return [
                'orderId' => ['sometimes', 'required'],
                'productId' => ['sometimes', 'required'],
                'quantity' => ['sometimes', 'required'],
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->orderId) {
            $this->merge([
                'order_id' => $this->orderId,
            ]);
        }

        if ($this->productId) {
            $this->merge([
                'product_id' => $this->productId,
            ]);
        }
    }
}
