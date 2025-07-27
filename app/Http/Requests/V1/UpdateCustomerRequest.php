<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
                'customerName' => ['required'],
                'contactName' => ['required'],
                'address' => ['required'],
                'city' => ['required'],
                'postalCode' => ['required'],
                'country' => ['required'],
            ];
        } else {
            return [
                'customerName' => ['sometimes', 'required'],
                'contactName' => ['sometimes', 'required'],
                'address' => ['sometimes', 'required'],
                'city' => ['sometimes', 'required'],
                'postalCode' => ['sometimes', 'required'],
                'country' => ['sometimes', 'required'],
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->postalCode){
            $this->merge([
                'postal_code' => $this->postalCode,
            ]);
        }

        if ($this->customerName) {
            $this->merge([
                'customer_name' => $this->customerName,
            ]);
        }

        if ($this->contactName) {
            $this->merge([
                'contact_name' => $this->contactName,
            ]);
        }        
    }
}
