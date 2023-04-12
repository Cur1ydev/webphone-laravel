<?php

namespace App\Repositories\Admin;

use App\Models\CategoryProduct;
use App\Models\Product;
use App\Repositories\Interface\CategoryInterface;

class CategoryAdmin implements CategoryInterface
{
    public function getAll()
    {
        return CategoryProduct::all();
    }

    public function getById($id)
    {
        return CategoryProduct::find($id);
    }

    public function createProduct(array $data)
    {
        $category = new CategoryProduct();
        $category->cate_product = $data['cate_product'];
        $category->slug = $data['slug'];
        $category->save();
    }

    public function deleteProduct($id)
    {
        return CategoryProduct::find($id)->delete();
    }
    public function checkDelete($id){
        return Product::where('parent_id',$id)->count();
    }

    public function updateProduct(array $data, $id)
    {
        return CategoryProduct::find($id)->update([
            'cate_product' => $data['cate_product'],
            'slug' => $data['slug']
        ]);
    }
}
