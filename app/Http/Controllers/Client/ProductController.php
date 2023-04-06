<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CategoryProduct;
use App\Models\Commune;
use App\Models\District;
use App\Repositories\Client\ProductClient;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $product;

    public function __construct(ProductClient $product)
    {
        $this->product = $product;
    }

    public function index(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        $featureProduct = $this->product->featureProduct();
        $iphoneProduct = $this->product->iphoneProduct();
        $macbookProduct = $this->product->macbookProduct();
        return view('client.index', compact('allCateProduct', 'featureProduct', 'iphoneProduct', 'macbookProduct', 'cart', 'totalCart'));
    }

    public function detailProduct(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        $findProduct = $this->product->findProduct($request->slug);
        $showProduct = $this->product->showProduct($request->slug);
        return view('client.productdetail', compact('allCateProduct', 'findProduct', 'request', 'showProduct', 'cart', 'totalCart'));
    }

    public function detailProductPost(Request $request)
    {
        $storageChange = $request->input('upstorage');
        if ($storageChange != null) {
            $price = $this->product->price($request->slug, $request->input('upstorage'));
            $data = [
                'price' => number_format($price->price),
            ];
            return response()->json($data);
        }
        $colorChange = $request->input('color');
        if ($colorChange != null) {
            $image = $this->product->image($request->slug, $request->input('color'));
            $data = [
                'image' => $image->image,
            ];
            return response()->json($data);
        }
    }

    public function cart(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        $showProduct = $this->product->showProduct($request->slug);
        if (count($cart) == 0) {
            return view('client.zerocart', compact('allCateProduct', 'totalCart', 'cart'));
        }
        return view('client.cart', compact('allCateProduct', 'cart', 'request', 'showProduct', 'totalCart'));
    }

    public function addToCart(Request $request)
    {
        $color = $request->color;
        $storage = $request->storage;
        $nameProduct = $request->nameProduct;
        $findCart = $this->product->findCart($nameProduct, $storage, $color);
        $cartItem = $this->product->cartItem($findCart->id);
        if ($cartItem) {
            if ($cartItem->id_status === 1) {
                DB::table('cart')
                    ->where('id_product', $findCart->id)
                    ->update([
                        'total_quantity' => $cartItem->total_quantity += 1,
                        'price' => ($cartItem->total_quantity) * ($findCart->total_price)
                    ]);
            }
        }
        $newCart = new Cart();
        $newCart->id_product = $findCart->id;
        $newCart->total_quantity = 1;
        $newCart->total_price = $findCart->price;
        $newCart->id_status = 1;
        $newCart->id_user = $request->session()->get('id');
        $newCart->save();
        return response()->json(['Success' => true]);
    }

    public function deleteCart(Request $request)
    {
        $deleteCart = $this->product->deleteCart($request->id);
        if ($deleteCart) {
            return redirect()->route('client.cart');
        }
    }

    public function deleteAll()
    {
        $deleteAll = $this->product->deleteAll();
        if ($deleteAll) {
            return redirect()->route('client.cart');
        }
    }

    public function editDetailProduct(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        $findProduct = $this->product->findProduct($request->slug);
        $showProduct = $this->product->showProduct($request->slug);
        return view('client.editproductdetail', compact('allCateProduct', 'findProduct', 'request', 'showProduct', 'cart', 'totalCart'));
    }

    public function editDetailProductPost(Request $request)
    {
        $storageChange = $request->input('upstorage');
        if ($storageChange != null) {
            $price = $this->product->priceEdit($request->slug, $request->input('upstorage'));
            $data = [
                'price' => number_format($price->price),
            ];
            return response()->json($data);
        }
        $colorChange = $request->input('color');
        if ($colorChange != null) {
            $image = $this->product->imageEdit($request->slug, $request->input('color'));
            $data = [
                'image' => $image->image,
            ];
            return response()->json($data);
        }
    }

    public function editProductDetail(Request $request)
    {
        $id = $request->id;
        $color = $request->color;
        $nameProduct = $request->nameProduct;
        $storage = $request->storage;
        $findProduct = $this->product->findProductEditProduct($color, $storage, $nameProduct);
        if ($findProduct) {
            $this->product->updateProductEditProduct($id, $findProduct->id, $findProduct->price);
        }
        return response()->json(['data' => 'success']);
    }

    public function category(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        $category = $this->product->category($request->category);
        return view('client.category', compact('allCateProduct', 'request', 'cart', 'totalCart', 'category'));
    }

    public function checkOut(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        $province = Province::all();
        $district = District::all();
        $commune = Commune::all();
        return view('client.checkout', compact('allCateProduct', 'province', 'district', 'commune', 'request', 'cart', 'totalCart'));
    }

    public function updateCart(Request $request)
    {
        $id = $request->id;
        $total_quantity = $request->total_quantity;
        $total_price = $request->total_price;
        if ($id != 0 && $total_price != 0 && $total_quantity != 0) {
            $this->product->updateCart($id, $total_quantity, $total_price);
        }
        return response()->json(['success' => "Thành công"]);
    }

    public function handleProvince(Request $request)
    {
        if (!empty($request->id_province)) {
            $district = $this->product->district($request->id_province);
            return response()->json(['data' => $district]);
        }
    }

    public function handleDistrict(Request $request)
    {
        if (!empty($request->id_district)) {
            $commune = $this->product->commune($request->id_district);
            return response()->json(['data' => $commune]);
        }

    }

    public function handleCommune(Request $request)
    {
        if (!empty($request->id_commune)) {
            $allAddress = $this->product->allAddress($request->id_commune);
            return response()->json(['data' => $allAddress]);
        }
    }

    public function checkOutPost(Request $request)
    {
        $id = $request->id;
        $username = $request->username;
        $phoneNumber = $request->phoneNumber;
        $email = $request->email;
        $address = $request->address;
        $request->session()->put('address', $address);
        foreach ($id as $item) {
            DB::table('user_cart')
                ->insert([
                    'id_cart' => $item,
                    'name_user' => $username,
                    'email' => $email,
                    'phone_number' => $phoneNumber,
                    'address' => $address,
                    'id_code' => "Loi-" . uniqid()
                ]);
            DB::table('cart')
                ->where('id', $item)
                ->update([
                    'id_status' => 2
                ]);
        }

        return response()->json(['data' => 'success']);
    }

    public function checkOutSuccess(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        $orderSuccess = $this->product->orderSuccess($request->session()->get('id'));
        return view('client.checkoutsuccess', compact('cart', 'orderSuccess', 'totalCart', 'allCateProduct'));
    }

    public function login(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        return view('client.login', compact('cart', 'totalCart', 'allCateProduct'));
    }

    public function loginPost(Request $request)
    {
        $data = [
            'email' => 'required',
            'password' => 'required|min:6'
        ];
        $mess = [
            'email.required' => "Email phải được nhập",
            'password.required' => "Mật khẩu phải được nhập",
            'password.min' => "Mật khẩu phải lớn hơn :min ký tự"
        ];
        $request->validate($data, $mess);
        $email = $request->email;
        $password = $request->password;
        $findUser = $this->product->findUser($email, $password);
        if ($findUser) {
            if ($findUser->role == 0) {
                $request->session()->put(['admin' => $findUser->username]);
                return redirect()->route('admin.home');
            } else {
                $request->session()->put(['client' => $findUser->username, 'id' => $findUser->id]);
                return redirect()->route('client.home');
            }
        } else {
            return back()->with('mess', 'Email hoặc Mật khẩu không chính xác');
        }
    }

    public function search(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        $keySearch = $request->search;
        $findProductSearch = $this->product->findProductSearch($keySearch);
        return view('client.search', compact('cart', 'findProductSearch', 'request', 'totalCart', 'allCateProduct'));
    }

    public function showCartOrder(Request $request)
    {
        $cart = $this->product->cart($request->session()->get('id'));
        $totalCart = $this->product->totalCart($request->session()->get('id'));
        $allCateProduct = CategoryProduct::all();
        $allProduct = $this->product->allProduct($request->session()->get('id'));
        return view('client.showcartorder', compact('cart', 'request', 'totalCart', 'allCateProduct', 'allProduct'));
    }

    public function cancelOrder(Request $request)
    {
        $data = [
            'id' => $request->id,
            'name' => $request->name
        ];
        $this->product->changeStatus($data);
        return redirect()->route('client.showcartoder');
    }
}
