<?php

namespace App\Repositories\Admin;
use App\Repositories\Interface\DashboardInterface;
use Illuminate\Support\Facades\DB;

class Dashboard implements DashboardInterface
{

    public function processing()
    {
        return DB::table('cart')
            ->join('user_cart','user_cart.id_cart','cart.id')
            ->where('id_status', 2)
            ->count();
    }

    public function cancel()
    {
        return DB::table('cart')
            ->join('user_cart','user_cart.id_cart','cart.id')
            ->where('cart.id_status', 5)
            ->count();
    }

    public function success()
    {
        return DB::table('cart')
            ->join('user_cart','user_cart.id_cart','cart.id')
            ->where('cart.id_status', 4)
            ->count();
    }

    public function totalPrice()
    {
        return DB::table('cart')
            ->join('user_cart','user_cart.id_cart','cart.id')
            ->where('cart.id_status', 4)
            ->sum('cart.total_price');
    }

    public function allProduct()
    {
        return DB::table('user_cart')
            ->join('cart', 'cart.id', 'user_cart.id_cart')
            ->join('status_order', 'status_order.id', 'cart.id_status')
            ->join('product', 'product.id', 'cart.id_product')
            ->orderBy('user_cart.created_at','desc')
            ->get();
    }
}
