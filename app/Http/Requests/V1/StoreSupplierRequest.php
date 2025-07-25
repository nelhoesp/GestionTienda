<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'supplierName' => ['required'],
            'contactName' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'postalCode' => ['required'],
            'country' => ['required'],
            'phone' => ['required'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'supplier_name' => $this->supplierName,
            'contact_name' => $this->contactName,
            'postal_code' => $this->postalCode,
        ]);
    }
}
