<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
                'customerId' => ['required'],
                'employeeId' => ['required'],
                'orderDate' => ['required', 'date'],
                'shipperId' => ['required'],
            ];
        } else {
            return [
                'customerId' => ['sometimes', 'required'],
                'employeeId' => ['sometimes', 'required'],
                'orderDate' => ['sometimes', 'required', 'date'],
                'shipperId' => ['sometimes', 'required'],
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->customerId) {
            $this->merge([
                'customer_id' => $this->customerId,
            ]);
        }

        if ($this->employeeId) {
            $this->merge([
                'employee_id' => $this->employeeId,
            ]);
        }

        if ($this->orderDate) {
            $this->merge([
                'order_date' => $this->orderDate,
            ]);
        }

        if ($this->shipperId) {
            $this->merge([
                'shipper_id' => $this->shipperId,
            ]);
        }
    }
}
