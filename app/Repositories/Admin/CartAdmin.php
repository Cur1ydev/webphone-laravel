<?php

namespace App\Repositories\Admin;

use App\Models\Cart;
use App\Repositories\Interface\CartInterface;
use Illuminate\Support\Facades\DB;

class CartAdmin implements  CartInterface
{
    public function getAll()
    {
        return DB::table('cart')
            ->select('product.name_product', 'status_order.status', 'category_product.cate_product', 'product.parent_id', 'product.memory_storage', 'product.slug', 'product.image', 'product.quantity', 'product.price', 'cart.total_price as total_price', 'cart.id', 'product.color', 'status_order.status', 'user.username', 'cart.total_quantity')
            ->join('product', 'product.id', 'cart.id_product')
            ->join('category_product', 'category_product.id', 'product.parent_id')
            ->join('status_order', 'status_order.id', 'cart.id_status')
            ->join('user', 'user.id', 'cart.id_user')
            ->where('status_order.status', 'Chưa Xử Lý')
            ->get();
    }
    public function Delete($id)
    {
        return Cart::find($id)->delete();
    }
}
