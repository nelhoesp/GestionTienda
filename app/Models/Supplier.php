<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /** @use HasFactory<\Database\Factories\SupplierFactory> */
    use HasFactory;

    // Definiendo nombre de la llave primaria
    protected $primaryKey = 'supplier_id';

    protected $fillable = [
        'supplier_name',
        'contact_name',
        'address',
        'city',
        'postal_code',
        'country',
        'phone',
    ];

    public function products() {
        return $this->hasMany(Product::class, 'supplier_id', 'supplier_id');
    }
}
