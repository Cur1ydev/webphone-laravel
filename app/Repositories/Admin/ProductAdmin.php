<?php
namespace  App\Repositories\Admin;
use App\Models\Product;
use App\Repositories\Interface\ProductInterface;

class ProductAdmin implements ProductInterface {
    public function updateProduct(array $data, $id)
    {
        // TODO: Implement updateProduct() method.
    }
    public function deleteProduct($id)
    {
        // TODO: Implement deleteProduct() method.
    }
    public function createProduct(array $data)
    {
        // TODO: Implement createProduct() method.
    }
    public function getAll()
    {
        return Product::all();
    }
    public function getById($id)
    {
        // TODO: Implement getById() method.
    }
}
