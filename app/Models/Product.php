<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    // Definiendo nombre de la llave primaria
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'supplier_id',
        'category_id',
        'unit',
        'price',
    ];

    public function order_details() {
        return $this->hasMany(OrderDetail::class, 'product_id', 'product_id');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
