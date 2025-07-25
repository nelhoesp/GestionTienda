<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'lastName' => ['required'],
            'firstName' => ['required'],
            'birthDate' => ['required', 'date'],
            'photo' => ['nullable'],
            'notes' => ['nullable'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'last_name' => $this->lastName,
            'first_name' => $this->firstName,
            'birth_date' => $this->birthDate,
        ]);
    }
}
