<?php

namespace App\Repositories\Client;

use Illuminate\Support\Facades\DB;

class ProductClient
{
    public function cart($id)
    {
        return DB::table('cart')
            ->select('product.name_product', 'status_order.status', 'category_product.cate_product', 'product.parent_id', 'product.memory_storage', 'product.slug', 'product.image', 'product.quantity', 'product.price', 'cart.total_price as total_price', 'cart.id', 'product.color', 'status_order.status', 'user.username', 'cart.total_quantity')
            ->join('product', 'product.id', 'cart.id_product')
            ->join('category_product', 'category_product.id', 'product.parent_id')
            ->join('status_order', 'status_order.id', 'cart.id_status')
            ->join('user', 'user.id', 'cart.id_user')
            ->where('status_order.status', 'Chưa Xử Lý')
            ->where('id_user', $id)
            ->get();
    }

    public function totalCart($id)
    {
        return DB::table('cart')
            ->select(DB::raw('count(*) as total'))
            ->join('status_order', 'status_order.id', 'cart.id_status')
            ->where('status_order.status', 'Chưa Xử Lý')
            ->where('id_user', $id)
            ->first();
    }

    public function featureProduct()
    {
        return DB::table('product')
            ->select('product.*', 'category_product.cate_product')
            ->join('category_product', 'category_product.id', 'product.parent_id')
            ->where('feature_product', 1)
            ->paginate(4);
    }

    public function iphoneProduct()
    {
        return DB::table('product')
            ->select('product.name_product', DB::raw("min(category_product.cate_product) as cate_product"), DB::raw("min(product.slug) as slug"), DB::raw("min(product.memory_storage) as memory_storage"), DB::raw("min(product.color) as color"), DB::raw("min(product.image) as image"), DB::raw("min(product.price) as price"))
            ->join('category_product', 'category_product.id', 'product.parent_id')
            ->where('name_product', 'like', '%iphone%')
            ->groupBy('name_product')
            ->get();
    }

    public function macbookProduct()
    {
        return DB::table('product')
            ->select('product.name_product', DB::raw("min(category_product.cate_product) as cate_product"), DB::raw("min(product.slug) as slug"), DB::raw("min(product.memory_storage) as memory_storage"), DB::raw("min(product.color) as color"), DB::raw("min(product.image) as image"), DB::raw("min(product.price) as price"))
            ->join('category_product', 'category_product.id', 'product.parent_id')
            ->where('name_product', 'like', '%macbook%')
            ->groupBy('name_product')
            ->get();
    }

    public function findProduct($slug)
    {
        return DB::table('product')->select('name_product', DB::raw("group_concat(distinct memory_storage) as memory_storage"), DB::raw("GROUP_CONCAT(distinct CONCAT(color,'-',code_color) ORDER BY color) AS color"), DB::raw("group_concat(distinct slug) as slug"), DB::raw("group_concat(distinct parent_id) as parent_id"), DB::raw("group_concat(distinct image) as image"), DB::raw("group_concat(distinct quantity) as quantity"), DB::raw("group_concat(distinct price) as price"))
            ->where('slug', $slug)
            ->groupBy('name_product')
            ->first();
    }

    public function showProduct($slug)
    {
        return DB::table('product')->where('slug', $slug)->first();
    }

    public function price($slug, $input)
    {
        return DB::table('product')
            ->where('slug', $slug)
            ->where('memory_storage', $input)
            ->first();
    }

    public function image($slug, $input)
    {
        return DB::table('product')
            ->where('slug', $slug)
            ->where('color', $input)
            ->first();
    }

    public function findCart($nameProduct, $storage, $color)
    {
        return DB::table('product')
            ->select('*')
            ->where('name_product', $nameProduct)
            ->where('memory_storage', $storage)
            ->where('color', $color)
            ->first();
    }

    public function cartItem($id)
    {
        return DB::table('cart')
            ->where('id_product', $id)
            ->first();
    }

    public function deleteCart($id)
    {
        return DB::table('cart')->where('id', $id)->delete();
    }

    public function deleteAll()
    {
        return DB::table('cart')->delete();
    }

    public function priceEdit($slug, $input)
    {
        return DB::table('product')
            ->where('slug', $slug)
            ->where('memory_storage', $input)
            ->first();
    }

    public function imageEdit($slug, $input)
    {
        return DB::table('product')
            ->where('slug', $slug)
            ->where('color', $input)
            ->first();
    }

    public function findProductEditProduct($color, $storage, $nameProduct)
    {
        return DB::table('product')
            ->select('*')
            ->where('color', $color)
            ->where('memory_storage', $storage)
            ->where('name_product', $nameProduct)
            ->first();
    }

    public function updateProductEditProduct($id, $id_product, $price)
    {
        return DB::table('cart')
            ->where('id', $id)
            ->update([
                'id_product' => $id_product,
                'total_price' => $price
            ]);
    }

    public function category($category)
    {
        return DB::table('product')
            ->select('product.name_product', DB::raw("min(category_product.cate_product) as cate_product"), DB::raw("min(product.slug) as slug"), DB::raw("min(product.memory_storage) as memory_storage"), DB::raw("min(product.color) as color"), DB::raw("min(product.image) as image"), DB::raw("min(product.price) as price"))
            ->join('category_product', 'category_product.id', 'product.parent_id')
            ->where('category_product.slug', $category)
            ->groupBy('name_product')
            ->get();
    }

    public function updateCart($id, $total_quantity, $total_price)
    {
        return DB::table('cart')
            ->where('id', $id)
            ->update([
                'total_quantity' => $total_quantity,
                'total_price' => $total_price
            ]);
    }

    public function district($id_province)
    {
        return DB::table('district')
            ->where('id_province', $id_province)
            ->get();
    }

    public function commune($id_district)
    {
        return DB::table('commune')
            ->where('id_district', $id_district)
            ->get();
    }

    public function allAddress($id_commune)
    {
        return DB::table('commune')
            ->join('province', 'province.id', 'commune.id_province')
            ->join('district', 'district.id', 'commune.id_district')
            ->where('commune.id', $id_commune)
            ->first();
    }

    public function orderSuccess($id)
    {
        return DB::table('user_cart')
            ->join('cart', 'cart.id', 'user_cart.id_cart')
            ->join('product', 'product.id', 'cart.id_product')
            ->where('cart.id_user', $id)
            ->where('cart.id_status', 1)
            ->get();
    }

    public function findUser($email, $password)
    {
        return DB::table('user')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
    }

    public function findProductSearch($keySearch)
    {
        return DB::table('product')
            ->select('product.name_product', DB::raw("min(category_product.cate_product) as cate_product"), DB::raw("min(product.slug) as slug"), DB::raw("min(product.memory_storage) as memory_storage"), DB::raw("min(product.color) as color"), DB::raw("min(product.image) as image"), DB::raw("min(product.price) as price"))
            ->join('category_product', 'category_product.id', 'product.parent_id')
            ->where('name_product', 'like', '%' . $keySearch . '%')
            ->groupBy('name_product')
            ->get();
    }

    public function allProduct($id)
    {
        return DB::table('user_cart')
            ->join('cart', 'cart.id', 'user_cart.id_cart')
            ->join('status_order', 'status_order.id', 'cart.id_status')
            ->join('product', 'product.id', 'cart.id_product')
            ->orderBy('user_cart.created_at', 'desc')
            ->where('cart.id_user', $id)
            ->where('cart.id_status', '!=', '1')
            ->get();
    }

    public function changeStatus(array $data)
    {
        return DB::table('cart')
            ->join('user_cart', 'user_cart.id_cart', 'cart.id')
            ->where('cart.id', $data['id'])
            ->where('user_cart.name_user', $data['name'])
            ->update([
                'cart.id_status' => 5
            ]);
    }
}
