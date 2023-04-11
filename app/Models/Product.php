<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'name_product',
        'memory_storage',
        'code_color',
        'slug',
        'parent_id',
        'image',
        'quantity',
        'price',
        'color',
        'description',
        'feature_product'
    ];

    public function CategoryProduct()
    {
        return $this->belongsTo('App\Models\CategoryProduct', 'parent_id');
    }
}
