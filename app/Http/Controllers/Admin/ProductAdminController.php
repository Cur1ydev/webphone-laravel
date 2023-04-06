<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interface\ProductInterface;

class ProductAdminController extends Controller
{
    protected $productAdmin;
    public function __construct(ProductInterface $productAdmin)
    {
        $this->productAdmin=$productAdmin;
    }
    public function getAllProduct(){
        $allProduct=$this->productAdmin->getAll();
        return view('admin.product',compact('allProduct'));
    }
}
