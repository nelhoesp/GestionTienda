<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    // Definiendo nombre de la llave primaria
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'customer_id',
        'employee_id',
        'order_date',
        'shipper_id',
    ];

    public function order_details() {
        return $this->hasMany(OrderDetail::class, 'order_id', 'order_id');
    }

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function shipper() {
        return $this->belongsTo(Shipper::class, 'shipper_id');
    }
}
