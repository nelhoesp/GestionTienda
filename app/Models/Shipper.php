<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    /** @use HasFactory<\Database\Factories\ShipperFactory> */
    use HasFactory;

    // Definiendo nombre de la llave primaria
    protected $primaryKey = 'shipper_id';

    public function orders() {
        return $this->hasMany(Order::class, 'shipper_id', 'shipper_id');
    }
}
