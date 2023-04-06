@extends('web.index')
@section('content')
    <!--Body Container-->
    <div id="page-content" ng-controller="orderSuccess">
        <!--Collection Banner-->
        <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"></div>
                <div class="collection-hero__title-wrapper container">
                    <h1 class="collection-hero__title">Đặt hàng thành công</h1>
                </div>
            </div>
        </div>
        <!--End Collection Banner-->

        <!--Main Content-->
        <div class="container">
            <div class="checkout-success-content py-2">
                <!--Order Card-->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="checkout-scard card border-0 rounded">
                            <div class="card-body text-center">
                                <p class="card-icon"><i class="icon an an-shield-check fs-1"></i></p>
                                <h4 class="card-title">Cảm ơn bạn đã đặt hàng!</h4>
                                <p class="card-text mb-1">Nhân viên bán hàng sẽ tự động gọi điện thoại sau 5 phút đặt hàng để xác nhận đơn hàng</p>
                                <p class="card-text text-order badge bg-success my-3">Ngày đặt hàng: {{date('d-m-Y')}}</p>
                                <div class="breadcrumbs text-uppercase mt-1 mt-lg-2"><a href="{{route('client.home')}}" title="Back to the home page">Quay về trang chủ !</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Order Card-->

            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!--End Body Container-->
    <script>
        const app=angular.module('myapp',[]);
        app.controller('orderSuccess',function ($scope,$http,$window){
            $scope.orderSuccesss=@json($orderSuccess);
        })
    </script>
@endsection
