<?php

namespace App\Repositories\Interface;

interface CategoryInterface
{
    public function getAll();

    public function getById($id);

    public function createProduct(array $data);

    public function updateProduct(array $data,$id);

    public function deleteProduct($id);
}
