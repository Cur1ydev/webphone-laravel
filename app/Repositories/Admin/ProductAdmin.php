<?php

namespace App\Repositories\Admin;

use App\Models\CategoryProduct;
use App\Models\Product;
use App\Repositories\Interface\ProductInterface;

class ProductAdmin implements ProductInterface
{
    public function updateProduct(array $data, $id)
    {
        return Product::find($id)->update([
            'name_product' => $data['name_product'],
            'memory_storage' => $data['memory_storage'],
            'code_color' => $data['code_color'],
            'slug' => $data['slug'],
            'parent_id' => $data['parent_id'],
            'image' => $data['image'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'color' => $data['color'],
            'description' => $data['description'],
            'feature_product' => $data['feature_product']
        ]);
    }

    public function deleteProduct($id)
    {
        return Product::find($id)->delete();
    }

    public function createProduct(array $data)
    {
        $product = new Product();
        $product->name_product = $data['name_product'];
        $product->memory_storage = $data['memory_storage'];
        $product->code_color = $data['code_color'];
        $product->slug = $data['slug'];
        $product->parent_id = $data['parent_id'];
        $product->image = $data['image'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];
        $product->color = $data['color'];
        $product->description = $data['description'];
        $product->feature_product = $data['feature_product'];
        return $product->save();
    }

    public function getAll()
    {
        return Product::all();
    }

    public function getById($id)
    {
        return Product::find($id);
    }

    public function getAllCategory()
    {
        return CategoryProduct::all();
    }
}
