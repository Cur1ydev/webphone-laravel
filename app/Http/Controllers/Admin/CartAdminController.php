<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interface\CartInterface;
use Illuminate\Http\Request;

class CartAdminController extends Controller
{
    protected $cart;
    public function __construct(CartInterface $cart)
    {
        $this->cart=$cart;
    }
    public function getAll(){
        $cart = $this->cart->getAll();
        return view('admin.cart.cart',compact('cart'));
    }
    public function deleteCart(Request $request){
        $this->cart->Delete($request->id);
        return redirect()->route('admin.cart');
    }
}
