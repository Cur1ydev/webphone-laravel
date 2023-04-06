@extends('web.index')
@section('content')
    <!--Body Container-->
    <div id="page-content" ng-controller="checkOutController">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"></div>
                <div class="collection-hero__title-wrapper container">
                    <h1 class="collection-hero__title">Thanh Toán</h1>
                    <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="{{route('client.home')}}"
                                                                            title="Back to the home page">Home</a><span>|</span><span
                            class="fw-bold">Thanh Toán</span></div>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->

        <!--Main Content-->
        <div class="container">
            <form class="checkout-form">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card card--grey">
                            <div class="card-body">
                                <h2 class="fs-6">Địa chỉ nhận hàng</h2>
                                <div class="row mt-2">
                                    <div class="col-sm-6"><label class="text-uppercase d-none">Họ và tên:</label>
                                        <div>Họ và tên</div>
                                        <div class="form-group"><input type="text" ng-model="username" name="username"
                                                                       class="form-control"></div>
                                        <h5 style="color:red">@{{errUsername}}</h5>
                                    </div>
                                    <div class="col-sm-6"><label class="text-uppercase d-none">Số điện thoại</label>
                                        <div>Số điện thoại</div>
                                        <div class="form-group"><input type="number" ng-model="phone_number"
                                                                       name="phone_number"
                                                                       class="form-control"></div>
                                        <h5 style="color:red">@{{errPhone_number}}</h5>

                                    </div>
                                </div>
                                <label class="text-uppercase d-none">Email</label>
                                <div class="form-group">
                                    <div>Email</div>
                                    <input type="email" ng-model="email" name="email" class="form-control">
                                    <h5 style="color:red">@{{errEmail}}</h5>
                                </div>
                                <label class="text-uppercase d-none">Tỉnh:</label>
                                <div class="form-group select-wrapper">
                                    <div>Chọn tỉnh</div>
                                    <select ng-change="chooseProvince()" ng-model="Province" id="address_country"
                                            data-default="United States" name="province">
                                        <option ng-repeat="province in provinces" ng-value="province.id">
                                            @{{province.province}}
                                        </option>
                                    </select>
                                    <h5 style="color:red">@{{errProvince}}</h5>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6"><label class="text-uppercase d-none">State:</label>
                                        <div class="form-group select-wrapper">
                                            <div>Chọn Quận,Huyện</div>
                                            <select ng-change="chooseDistrict()" ng-model="District"
                                                    id="address_province" name="district" data-default="">
                                                <option ng-repeat="district in districts"
                                                        ng-value="district.id">@{{district.district}}
                                                </option>
                                            </select>
                                            <h5 style="color:red">@{{errDistrict}}</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"><label class="text-uppercase d-none">State:</label>
                                        <div class="form-group select-wrapper">
                                            <div>Chọn Phường,Xã</div>
                                            <select ng-change="chooseCommune()" ng-model="Commune" id="address_province"
                                                    name="commune" data-default="">
                                                <option ng-repeat="commune in communes" ng-value="commune.id">
                                                    @{{commune.commune}}
                                                </option>
                                            </select>
                                            <h5 style="color:red">@{{errCommune}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <label class="text-uppercase d-none">Số nhà,Ngõ</label>
                                <div class="form-group">
                                    <div>Số nhà,Ngõ</div>
                                    <input type="text" ng-model="numberHouse" name="numberHouse" class="form-control">
                                    <h5 style="color:red">@{{errnumberHouse}}</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2 mt-md-0">
                        <div class="card card--grey mt-2">
                            <div class="card-body">
                                <h2 class="fs-6">PAYMENT METHOD</h2>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="customRadio clearfix">
                                            <input id="formcheckoutRadio4" value="" name="radio2" type="radio"
                                                   class="radio" checked="checked">
                                            <label for="formcheckoutRadio4">Credit Card</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="customRadio clearfix">
                                            <input id="formcheckoutRadio5" value="" name="radio2" type="radio"
                                                   class="radio">
                                            <label for="formcheckoutRadio5">Paypal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="text-uppercase d-none">Card Number</label>
                                        <div class="form-group"><input type="text" placeholder="Card Number"
                                                                       class="form-control" pattern="[0-9\-]*"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="text-uppercase">Month:</label>
                                        <div class="form-group select-wrapper">
                                            <select class="form-control">
                                                <option selected="selected" value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="text-uppercase">Year:</label>
                                        <div class="form-group select-wrapper">
                                            <select class="form-control">
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="text-uppercase d-none">CVV Code</label>
                                        <div class="form-group m-0"><input type="text" placeholder="CVV Code"
                                                                           class="form-control" pattern="[0-9\-]*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card--grey mt-2">
                            <div class="card-body">
                                <h2 class="fs-6">Order Comment</h2>
                                <label class="text-uppercase d-none">Write a comment here:</label>
                                <textarea class="form-control textarea--height-200" rows="5"
                                          placeholder="Write a comment here"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mt-2 mt-lg-0">
                        <h2 class="title fs-6">Tổng sản phẩm</h2>
                        <div class="table-responsive order-table style1">
                            <table class="table table-bordered align-middle table-hover text-center mb-1">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-start">Name</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="cart in carts">
                                    <td class="thumbImg"><img class="cart__image" src="@{{ cart.image }}" width="80"/>
                                    </td>
                                    <td class="text-start">
                                        <h6>@{{ cart.name_product }}</h6>
                                        <div class="cart__meta-text">
                                            Màu Sắc: @{{ cart.color }}<br>Bộ Nhớ Trong: @{{ cart.memory_storage }}<br>
                                        </div>
                                    </td>
                                    <td>@{{ cart.price | number: '.0' }}₫</td>
                                    <td>@{{ cart.total_quantity }}</td>
                                    <td class="fw-500">@{{ cart.total_price | number: '.0' }}₫</td>
                                </tr>

                                </tbody>
                                <tfoot class="font-weight-600">
                                <tr>
                                    <td colspan="4" class="text-end fw-bolder">Shipping</td>
                                    <td class="fw-bolder">@{{ ship | number: '.0' }}₫</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end fw-bolder">Total</td>
                                    <td class="fw-bolder">@{{ total | number: '.0' }}₫</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="card card--grey mt-2">
                            <div class="card-body">
                                <h2 class="fs-6">Apply Couponcode</h2>
                                <label class="text-uppercase d-none">Enter Coupon code:</label>
                                <div class="input-group flex-nowrap">
                                    <input class="input-group__field" type="text" placeholder="Coupon code"
                                           name="coupon">
                                    <span class="input-group__btn">
                                                <input type="button" class="btn rounded-end text-nowrap" value="Apply">
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="order-button-payment mt-2 clearfix">
                            <button ng-click="checkOut()"
                                    class="cartCheckout fs-6 btn btn-lg rounded w-100 fw-600 text-white">Place order
                            </button>
                        </div>
                        <div class="paymnet-img text-center"><img src="assets/images/payment-img.jpg" alt="Payment">
                        </div>
                    </div>
                </div>
                @csrf
            </form>
        </div>
        <!--End Main Content-->
    </div>
    <!--End Body Container-->
    <script>
        const app = angular.module('myapp', []);
        app.controller('checkOutController', function ($scope, $http, $window) {
            $scope.carts =@json($cart);
            $scope.provinces =@json($province);
            $scope.ship = 50000;
            $scope.total = $scope.ship;
            $scope.Province = 0;
            $scope.District = 0;
            $scope.Commune = 0;
            $scope.address = ""
            for (let i = 0; i < $scope.carts.length; i++) {
                var item = $scope.carts[i];
                $scope.total += Number(item.total_price)
            }
            $scope.chooseProvince = function () {
                $http({
                    method: "Post",
                    url: '{{route('client.handleProvince')}}',
                    data: {
                        'id_province': $scope.Province
                    }
                }).then(function successCallBack(response) {
                    $scope.districts = response.data.data
                    $scope.chooseDistrict = function () {
                        $http({
                            method: "Post",
                            url: '{{route('client.handleDistrict')}}',
                            data: {
                                'id_district': $scope.District
                            }
                        }).then(function successCallBack(response) {
                            $scope.communes = response.data.data
                            $scope.chooseCommune = function () {
                                $http({
                                    method: "Post",
                                    url: '{{route('client.handleCommune')}}',
                                    data: {
                                        'id_commune': $scope.Commune
                                    }
                                }).then(function successCallBack(response) {
                                    $scope.address = response.data.data.commune + "," + response.data.data.district + "," + response.data.data.province;
                                }, function errorCallBack(response) {
                                    console.log(response)
                                })
                            }
                        }, function errorCallBack(response) {
                            console.log(response)
                        })
                    }

                }, function errorCallBack(response) {
                    console.log(response)
                })
            }

            $scope.checkOut = function () {
                let inputError = false;
                if (!$scope.username) {
                    $scope.errUsername = "Họ và tên phải được nhập"
                    inputError = true
                } else {
                    $scope.errUsername = ""
                }
                if (!$scope.phone_number) {
                    $scope.errPhone_number = "Số điẹn thoại phải được nhập"
                    inputError = true
                } else {
                    $scope.errPhone_number = ""
                }
                if (!$scope.email) {
                    $scope.errEmail = "Số điẹn thoại phải được nhập"
                    inputError = true
                } else {
                    $scope.errEmail = ""
                }
                if ($scope.Province === 0) {
                    $scope.errProvince = "Tỉnh thành phải được nhập"
                    inputError = true
                } else {
                    $scope.errProvince = ""
                }
                if ($scope.District === 0) {
                    $scope.errDistrict = "Huyện,Thành phố thành phải được nhập"
                    inputError = true
                } else {
                    $scope.errDistrict = ""
                }
                if ($scope.Commune === 0) {
                    $scope.errCommune = "Xã,thị trấn thành phải được nhập"
                    inputError = true
                } else {
                    $scope.errCommune = ""
                }
                if (!$scope.numberHouse) {
                    $scope.errnumberHouse = "Số nhà phải được nhập"
                    inputError = true
                } else {
                    $scope.errnumberHouse = ""
                }
                if (!inputError) {
                    const address = $scope.numberHouse + "," + $scope.address;
                    const username = $scope.username;
                    const phoneNumber = $scope.phone_number;
                    const email = $scope.email;
                    const id = [];
                    angular.forEach($scope.carts, function (item) {
                        id.push(item.id)
                    })
                    $http({
                        method: "Post",
                        url: '{{route('client.checkOutPost')}}',
                        data: {
                            'id': id,
                            'email': email,
                            'phoneNumber': phoneNumber,
                            'username': username,
                            'address': address
                        }
                    }).then(function successCallBack(response) {
                        console.log(response)
                        $window.location.href='{{route('client.checkOutSuccess')}}'
                    },function errorCallBack(response) {
                        console.log(response)
                    })
                }
            }
        })
    </script>
@endsection
