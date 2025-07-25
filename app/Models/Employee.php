<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;

    // Definiendo nombre de la llave primaria
    protected $primaryKey = 'employee_id';

    protected $fillable = [
        'last_name',
        'first_name',
        'birth_date',
        'photo',
        'notes',
    ];

    public function orders() {
        return $this->hasMany(Order::class, 'employee_id', 'employee_id');
    }
}
