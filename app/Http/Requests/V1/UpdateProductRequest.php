<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
                'productName' => ['required'],
                'supplierId' => ['required'],
                'categoryId' => ['required'],
                'unit' => ['required'],
                'price' => ['required', 'numeric'],
            ];
        } else {
            return [
                'productName' => ['sometimes', 'required'],
                'supplierId' => ['sometimes', 'required'],
                'categoryId' => ['sometimes', 'required'],
                'unit' => ['sometimes', 'required'],
                'price' => ['sometimes', 'required', 'numeric'],
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->productName) {
            $this->merge([
                'product_name' => $this->productName,
            ]);
        }

        if ($this->supplierId) {
            $this->merge([
                'supplier_id' => $this->supplierId,
            ]);
        }

        if ($this->categoryId) {
            $this->merge([
                'category_id' => $this->categoryId,
            ]);
        }
    }
}
