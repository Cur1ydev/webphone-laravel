<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $table = 'category_product';
    protected $fillable = [
        'cate_product',
        'slug'
    ];

    public function Product()
    {
        return $this->hasMany('App\Models\Product', 'parent_id');
    }
}
