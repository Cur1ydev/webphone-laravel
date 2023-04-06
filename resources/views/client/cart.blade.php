@extends('web.index')
@section('content')
    <!--Body Container-->
    <div ng-controller="cartController" id="page-content">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"></div>
                <div class="collection-hero__title-wrapper container">
                    <h1 class="collection-hero__title">Giỏ Hàng</h1>
                    <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="{{route('client.home')}}"
                                                                            title="Back to the home page">Home</a><span>|</span><span
                            class="fw-bold"><a
                                href="{{route('client.cart')}}">Giỏ Hàng</a></span></div>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->

        <!--Main Content-->
        <div class="container">
            <!--Cart Page-->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
                    <div class="alert alert-success py-2 rounded-1 alert-dismissible fade show cart-alert" role="alert">
                        <i class="align-middle icon an an-truck icon-large me-2"></i><strong class="text-uppercase">Congratulations!</strong>
                        You've got free shipping!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <table class="align-middle">
                        <thead class="cart__row cart__header small--hide">
                        <tr>
                            <th class="action">&nbsp;</th>
                            <th colspan="2" class="text-start">Product</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="cart in carts" class="cart__row border-bottom line1 cart-flex border-top">
                            <td class="cart-delete text-center small--hide"><a href="deleteCart/@{{ cart.id }}"
                                                                               class="btn btn--secondary cart__remove remove-icon position-static"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Remove item"><i
                                        class="icon an an-times-r"></i></a></td>
                            <td class="cart__image-wrapper cart-flex-item">
                                <img src="@{{ cart.image }}"
                                     class="cart__image blur-up lazyload"
                                     width="80"/>
                            </td>
                            <td class="cart__meta small--text-left cart-flex-item">
                                <div class="list-view-item__title">
                                    @{{ cart.name_product }}
                                </div>
                                <div class="cart__meta-text">
                                    Màu Sắc: @{{ cart.color }}<br>Bộ Nhớ Trong: @{{cart.memory_storage}} <br>
                                </div>
                                <div>
                                    <a
                                        href="@{{ cart.cate_product }}/@{{cart.slug}}/@{{ cart.id }}"><h6>Sửa</h6></a>
                                </div>
                                <div>
                                    @{{ cart.errorIncrease }}
                                </div>
                            </td>
                            <td class="cart__price-wrapper cart-flex-item text-center small--hide">
                                <span class="money">@{{cart.price | number: '.0' }}</span>₫
                            </td>
                            <td class="cart__update-wrapper cart-flex-item text-end text-md-center">
                                <div class="cart__qty d-flex justify-content-end justify-content-md-center">
                                    <div class="qtyField">
                                        <a ng-click="reduceQuantity(cart,cart.id)" class="qtyBtn minus"
                                           href="javascript:void(0);"><i
                                                class="icon an an-minus-r"></i></a>
                                        <input ng-blur="outQuantity(cart)" ng-model="cart.total_quantity"
                                               class="cart__qty-input qty"
                                               type="number" ng-value="cart.total_quantity" pattern="[0-9]*"/>
                                        <a ng-click="increaseQuantity(cart,cart.id)" class="qtyBtn plus"
                                           href="javascript:void(0);"><i
                                                class="icon an an-plus-r"></i></a>
                                    </div>
                                </div>
                                <a href="#" title="Remove"
                                   class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                            </td>
                            <td class="cart-price cart-flex-item text-center small--hide">
                                <span class="money fw-500">@{{cart.total_price | number: '.0' }}</span>₫
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="3" class="text-start pt-3"><a href="{{route('client.home')}}"
                                                                       class="btn btn--link d-inline-flex align-items-center btn--small p-0 cart-continue"><i
                                        class="me-1 icon an an-angle-left-l"></i><span
                                        class="text-decoration-underline">Continue shopping</span></a></td>
                            <td colspan="3" class="text-end pt-3">
                                <button
                                    onclick="if(confirm('Bạn chắc chắc muốn xóa tất cả chứ ?')){location.href='{{route('client.deleteAll')}}'}"
                                    name="clear"
                                    class="btn btn--link d-inline-flex align-items-center btn--small small--hide">
                                    <i class="me-1 icon an an-times-r"></i><span
                                        class="ms-1 text-decoration-underline">Clear Shoping Cart</span></button>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="currencymsg">We processes all orders in USD. While the content of your cart is currently
                        displayed in USD, the checkout will use USD at the most current exchange rate.
                    </div>
                    <div class="row my-3">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-12 cart-col">
                            <h5>Discount Codes</h5>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="address_zip">Enter your coupon code if you have one.</label>
                                    <div class="input-group flex-nowrap">
                                        <input class="input-group__field" type="text" name="coupon"/>
                                        <span class="input-group__btn">
                                                    <input type="button" class="btn rounded-end text-nowrap"
                                                           value="Apply Coupon"/>
                                                </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart__footer">
                    <div class="cart_info">
                        <div class="cart-order_detail cart-col">
                            <div class="row">
                                <span class="col-6 col-sm-6 cart__subtotal-title"><strong>Tổng Tiền</strong></span>
                                <span class="col-6 col-sm-6 cart__subtotal-title cart__subtotal text-end"><span
                                        class="money">@{{ total | number: '.0' }}</span></span>
                            </div>
                            <p class="cart__shipping m-0">Shipping &amp; taxes calculated at checkout</p>
                            <p class="cart__shipping pt-0 m-0 fst-normal freeShipclaim"><i
                                    class="me-1 align-middle icon an an-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE</p>
                            <div class="customCheckbox cart_tearm">
                                <input ng-change="ClickAgree()" ng-model="isSelect" type="checkbox" id="cart_tearm">
                                <label for="cart_tearm">I agree with the terms and conditions</label>
                            </div>
                            <div>
                                <h6 style="color: red">@{{ errorAgree }}</h6>
                            </div>
                            <button ng-click="CheckOut()" id="cartCheckout"
                                    class="btn btn--small-wide rounded my-4 checkout">Proceed To Checkout
                            </button>
                            <div class="paymnet-img text-center"><img src="assets/images/safepayment.png"
                                                                      alt="Payment"/></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Cart Page-->
        </div>
        <!--End Main Content-->
    </div>
    <!--End Body Container-->
    <script>
        const app = angular.module('myapp', [])
        app.controller('cartController', function ($scope, $http, $window) {
            $scope.carts =@json($cart);
            $scope.total = 0;
            let idChange = 0;
            let total_quantity = 0;
            let total_price = 0;
            let statusAgree = false;
            for (let i = 0; i < $scope.carts.length; i++) {
                var item = $scope.carts[i];
                $scope.total += Number(item.price)
            }
            $scope.increaseQuantity = function (cart, id) {
                if (cart.total_quantity < cart.quantity) {
                    cart.total_quantity++
                    total_quantity = cart.total_quantity;
                    idChange = id;
                    cart.total_price = cart.price * cart.total_quantity;
                    total_price = cart.total_price
                    $scope.total += Number(cart.price);
                }
                if (cart.total_quantity === cart.quantity) {
                    //cart sẽ tự động thêm trường errorIncrease vào array
                    cart.errorIncrease = `Xin lỗi,số lượng của bạn đã vượt quá số lượng của Giỏ Hàng.Giỏ Hàng tôi đa chỉ có ${cart.quantity} số lượng`;
                } else {
                    cart.errorIncrease = ""
                }
            }
            $scope.reduceQuantity = function (cart, id) {
                if (cart.total_quantity > 1) {
                    cart.total_quantity--;
                    cart.total_price = cart.total_quantity * cart.price;
                    $scope.total -= Number(cart.price);
                    total_quantity = cart.total_quantity;
                    idChange = id;
                    total_price = cart.total_price
                    cart.errorIncrease = "";
                }
            }
            $scope.outQuantity = function (cart) {
                if (cart.total_quantity > cart.quantity) {
                    cart.errorIncrease = `Xin lỗi,số lượng của bạn đã vượt quá số lượng của Giỏ Hàng.Giỏ Hàng tôi đa chỉ có ${cart.quantity} số lượng`;
                    cart.total_quantity = 1;
                } else {
                    cart.total_price = cart.total_quantity * cart.price;
                    cart.errorIncrease = ""
                }
            }
            $scope.ClickAgree = function () {
                if ($scope.isSelect) {
                    statusAgree=true
                } else {
                    statusAgree=false
                }
            }
            $scope.CheckOut=function (){
                if(statusAgree===false){
                    $scope.errorAgree="Mời Bạn Xác Nhận Vào Điều Khoản Của Chúng Tôi"
                    return false;
                }
                else{
                    $http({
                        method:'post',
                        url:'{{route('client.updateCart')}}',
                        data:{
                            'id':idChange,
                            'total_quantity':total_quantity,
                            'total_price':total_price
                        }
                    }).then(function successCallBack(response){
                        $window.location.href="{{route('client.checkOut')}}"
                    },function errorCallBack(response) {
                        console.log(response)
                    })
                }
            }
        })
    </script>
@endsection
