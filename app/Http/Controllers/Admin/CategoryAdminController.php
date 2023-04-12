<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interface\CategoryInterface;
use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    protected $category;

    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }

    public function getAllCategory()
    {
        $category = $this->category->getAll();
        return view('admin.category.category', compact('category'));
    }

    public function addCategory(Request $request)
    {
        return view('admin.category.addcategory');
    }

    public function addCategoryPost(Request $request)
    {
        $rule = [
            'cate_product' => 'required',
            'slug' => 'required',
        ];
        $mess = [
            'cate_product.required' => 'Tên danh mục phải được nhập',
            'slug.required' => 'Slug phải được nhập',
        ];
        $request->validate($rule, $mess);
        $data = [
            'cate_product' => $request->cate_product,
            'slug' => $request->slug,
        ];
        $this->category->createProduct($data);
        return redirect()->route('admin.category');
    }

    public function getById(Request $request)
    {
        $findCategory = $this->category->getById($request->id);
        return view('admin.category.editcategory', compact('findCategory'));
    }

    public function updateCategory(Request $request)
    {
        $rule = [
            'cate_product' => 'required',
            'slug' => 'required',
        ];
        $mess = [
            'cate_product.required' => 'Tên danh mục phải được nhập',
            'slug.required' => 'Slug phải được nhập',
        ];
        $request->validate($rule, $mess);
        $data = [
            'cate_product' => $request->cate_product,
            'slug' => $request->slug
        ];
        $this->category->updateProduct($data, $request->id);
        return redirect()->route('admin.category');
    }

    public function deleteCategory(Request $request)
    {
        $count = $this->category->checkDelete($request->id);
        if ($count > 0){
            return back()->with('fail','Bạn sẽ không thể xóa danh mục cha khi chưa xóa hết danh mục con');
        } else{
            $this->category->deleteProduct($request->id);
            return redirect()->route('admin.category');

        }
    }

}
