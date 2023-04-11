<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\Interface\ProductInterface;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    protected $productAdmin;

    public function __construct(ProductInterface $productAdmin)
    {
        $this->productAdmin = $productAdmin;
    }

    public function getAllProduct()
    {
        $allProduct = $this->productAdmin->getAll();
        return view('admin.product', compact('allProduct'));
    }

    public function addProduct(Request $request)
    {
        $allCategory = $this->productAdmin->getAllCategory();
        return view('admin.addproduct', compact('allCategory'));
    }

    public function addProductPost(Request $request)
    {
        $rule = [
            'name_product' => 'required',
            'memory_storage' => 'required',
            'code_color' => 'required',
            'slug' => 'required',
            'parent_id' => 'required',
            'image' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'color' => 'required',
            'description' => 'required',
            'feature_product' => 'required',
        ];
        $mess = [
            'name_product.required' => 'Tên sản phẩm phải được nhập',
            'memory_storage.required' => 'Bộ nhớ trong phải được nhập',
            'code_color.required' => 'Mã màu phải được nhập',
            'slug.required' => 'Slug phải được nhập',
            'parent_id.required' => 'Danh mục cha phải được chọn',
            'image.required' => 'Ảnh phải được nhập',
            'quantity.required' => 'Số lượng phải được nhập',
            'quantity.numeric' => 'Số lượng phải được nhập ở dạng số',
            'price.required' => 'Giá phải được nhập',
            'price.numeric' => 'Giá phải được nhập ở dạng số',
            'color.required' => 'Màu sắc phải được nhập',
            'description.required' => 'Mô tả phải được nhập',
            'feature_product.required' => 'Danh mục nổi bật phải được chọn',
        ];
        $request->validate($rule, $mess);
        $data = [
            'name_product' => $request->name_product,
            'memory_storage' => $request->memory_storage,
            'code_color' => $request->code_color,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
            'image' => $request->image,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'color' => $request->color,
            'description' => $request->description,
            'feature_product' => $request->feature_product
        ];
        $this->productAdmin->createProduct($data);
        return redirect()->route('admin.productAdmin');
    }

    public function getByid(Request $request)
    {
        $getProduct = $this->productAdmin->getById($request->id);
        $allCategory = $this->productAdmin->getAllCategory();
        return view('admin.editProduct', compact('getProduct', 'allCategory'));
    }

    public function updateProduct(Request $request)
    {
        $rule = [
            'name_product' => 'required',
            'memory_storage' => 'required',
            'code_color' => 'required',
            'slug' => 'required',
            'parent_id' => 'required',
            'image' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'color' => 'required',
            'description' => 'required',
            'feature_product' => 'required',
        ];
        $mess = [
            'name_product.required' => 'Tên sản phẩm phải được nhập',
            'memory_storage.required' => 'Bộ nhớ trong phải được nhập',
            'code_color.required' => 'Mã màu phải được nhập',
            'slug.required' => 'Slug phải được nhập',
            'parent_id.required' => 'Danh mục cha phải được chọn',
            'image.required' => 'Ảnh phải được nhập',
            'quantity.required' => 'Số lượng phải được nhập',
            'quantity.numeric' => 'Số lượng phải được nhập ở dạng số',
            'price.required' => 'Giá phải được nhập',
            'price.numeric' => 'Giá phải được nhập ở dạng số',
            'color.required' => 'Màu sắc phải được nhập',
            'description.required' => 'Mô tả phải được nhập',
            'feature_product.required' => 'Danh mục nổi bật phải được chọn',
        ];
        $request->validate($rule, $mess);
        $data = [
            'name_product' => $request->name_product,
            'memory_storage' => $request->memory_storage,
            'code_color' => $request->code_color,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
            'image' => $request->image,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'color' => $request->color,
            'description' => $request->description,
            'feature_product' => $request->feature_product
        ];
        $this->productAdmin->updateProduct($data, $request->id);
        return redirect()->route('admin.productAdmin');
    }

    public function deleteProduct(Request $request)
    {
        $deleteProduct = $this->productAdmin->deleteProduct($request->id);
        if ($deleteProduct) {
            return redirect()->route('admin.productAdmin');
        }
    }
}
