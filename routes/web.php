<?php

use App\Http\Controllers\Admin\ChangeStatusController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Admin\CategoryAdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('adminLogin')->prefix('/admin')->name('admin.')->group(function (){
    Route::get('/',[DashboardController::class,'dashboard'])->name('home');
    Route::get('/changeStatus/{id}/{status}-{name}',[ChangeStatusController::class,'status'])->name('changeStatus');
    Route::post('/statusPost/{id}-{name}',[ChangeStatusController::class,'statusPost'])->name('statusPost');
    Route::get('/logout',function (){
        session()->forget('admin');
        return redirect()->route('client.login');
    })->name('logout');
    Route::get('/productAdmin',[ProductAdminController::class,'getAllProduct'])->name('productAdmin');
    Route::get('/addProduct',[ProductAdminController::class,'addProduct'])->name('addProduct');
    Route::post('/addProduct',[ProductAdminController::class,'addProductPost'])->name('addProductPost');
    Route::get('/editProduct/{id}',[ProductAdminController::class,'getByid'])->name('editProduct');
    Route::post('/editProduct/{id}',[ProductAdminController::class,'updateProduct'])->name('editProductPost');
    Route::get('/deleteProduct/{id}',[ProductAdminController::class,'deleteProduct'])->name('deleteProduct');
    Route::get('/category',[CategoryAdminController::class,'getAllCategory'])->name('category');
    Route::get('/addCategory',[CategoryAdminController::class,'addCategory'])->name('addCategory');
    Route::post('/addCategory',[CategoryAdminController::class,'addCategoryPost'])->name('addCategoryPost');
    Route::get('/editCategory/{id}',[CategoryAdminController::class,'getById'])->name('editCategory');
    Route::post('/editCategory/{id}',[CategoryAdminController::class,'updateCategory'])->name('editCategoryPost');
    Route::get('/deleteCategory/{id}',[CategoryAdminController::class,'deleteCategory'])->name('deleteCategory');
});
Route::prefix('/')->name('client.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('home');
    Route::middleware('clientLogin')->get('/cart',[ProductController::class,'cart'])->name('cart');
    Route::post('add-to-cart-post',[ProductController::class,'addToCart'])->name('addToCart');
    Route::middleware('clientLogin')->get('/deleteCart/{id}',[ProductController::class,'deleteCart'])->name('deleteCart');
    Route::middleware('clientLogin')->get('/deleteAll',[ProductController::class,'deleteAll'])->name('deleteAll');
    Route::post('/edit-product-detail',[ProductController::class,'editProductDetail'])->name('editProductDetail');
    Route::middleware('clientLogin')->get('/checkout',[ProductController::class,'checkOut'])->name('checkOut');
    Route::post('/update-cart',[ProductController::class,'updateCart'])->name('updateCart');
    Route::post('/handleProvince',[ProductController::class,'handleProvince'])->name('handleProvince');
    Route::post('/handleDistrict',[ProductController::class,'handleDistrict'])->name('handleDistrict');
    Route::post('/handleCommune',[ProductController::class,'handleCommune'])->name('handleCommune');
    Route::post('/checkout',[ProductController::class,'checkOutPost'])->name('checkOutPost');
    Route::middleware('clientLogin')->get('/checkoutsuccess',[ProductController::class,'checkOutSuccess'])->name('checkOutSuccess');
    Route::get('/login',[ProductController::class,'login'])->name('login');
    Route::post('/login',[ProductController::class,'loginPost'])->name('loginPost');
    Route::get('/logout',function (){
        session()->forget('client');
        return redirect()->route('client.login');
    })->name('logout');
    Route::get('/search',[ProductController::class,'search'])->name('search');
    Route::middleware('clientLogin')->get('/orderSuccess',[ProductController::class,'orderSuccess'])->name('orderSuccess');
    Route::get('/showcartoder',[ProductController::class,'showCartOrder'])->name('showcartoder');
    Route::get('/cancelOrder/{id}/{name}',[ProductController::class,'cancelOrder'])->name('cancelOrder');
//    Route Động
    Route::get('/{category}',[ProductController::class,'category'])->name('category');
    Route::middleware('clientLogin')->get('/{product}/{slug}', [ProductController::class, 'detailProduct'])->name('detail');
    Route::post('/{product}/{slug}', [ProductController::class, 'detailProductPost'])->name('detailProductPost');
    Route::middleware('clientLogin')->get('/{product}/{slug}/{id}',[ProductController::class,'editDetailProduct'])->name('editDetailProduct');
    Route::post('/{product}/{slug}/{id}',[ProductController::class,'editDetailProductPost'])->name('editDetailProductPost');
});



