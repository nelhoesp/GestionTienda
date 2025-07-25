<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'employeeId' => $this->employee_id,
            'lastName' => $this->last_name,
            'firstName' => $this->first_name,
            'birthDate' => $this->birth_date,
            'photo' => $this->photo,
            'notes' => $this->notes,
        ];
    }
}
