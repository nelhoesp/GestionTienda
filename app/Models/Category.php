<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    // Definiendo nombre de la llave primaria
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
        'description',
    ];

    public function products() {
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
}
