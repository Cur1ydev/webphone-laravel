<?php

namespace App\Repositories\Admin;
use App\Models\StatusOrder;
use App\Repositories\Interface\ChangeStatusInterface;
use Illuminate\Support\Facades\DB;

class ChangeStatus implements ChangeStatusInterface
{
    public function showStatus()
    {
        return StatusOrder::all();
    }
    public function changeStatus(array $data)
    {
        return DB::table('cart')
            ->join('user_cart','user_cart.id_cart','cart.id')
            ->where('cart.id',$data['id'])
            ->where('user_cart.name_user',$data['name'])
            ->update([
                'cart.id_status'=>$data['status']
            ]);
    }
}
