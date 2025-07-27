<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
                'lastName' => ['required'],
                'firstName' => ['required'],
                'birthDate' => ['required', 'date'],
                'photo' => ['required'],
                'notes' => ['required'],
            ];
        } else {
            return [
                'lastName' => ['sometimes', 'required'],
                'firstName' => ['sometimes', 'required'],
                'birthDate' => ['sometimes', 'required', 'date'],
                'photo' => ['sometimes', 'required'],
                'notes' => ['sometimes', 'required'],
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->lastName) {
            $this->merge([
                'last_name' => $this->lastName,
            ]);
        }

        if ($this->firstName) {
            $this->merge([
                'first_name' => $this->firstName,
            ]);
        }

        if ($this->birthDate) {
            $this->merge([
                'birth_date' => $this->birthDate,
            ]);
        }
    }
}
