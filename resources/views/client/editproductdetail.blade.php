@extends('web.index')
@section('content')
    <!--Body Container-->
    <div ng-controller="detailController" id="page-content">
        <!--Breadcrumbs-->
        <div class="breadcrumbs-wrapper text-uppercase">
            <div class="container">
                <div class="breadcrumbs"><a href="{{route('client.home')}}" title="Back to the home page">Home</a><span>|</span><span
                        class="fw-bold"><a href="{{$request->slug}}">{{$findProduct->name_product}}</a></span></div>
            </div>
        </div>
        <!--End Breadcrumbs-->

        <div class="container-fluid">
            <!--Main Content-->
            <div class="row flex-column-reverse flex-lg-row">
                <!--Sidebar-->
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 col-left sidebar">
                    <!--You May Also Like-->
                    <div class="sidebar_widget">
                        <div class="widget-title">
                            <h2>You May Also Like</h2>
                        </div>
                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                                <div class="row clearfix">
                                    <div class="col-12 mb-10">
                                        <div class="mini-list-item d-flex">
                                            <div class="mini-view_image">
                                                <a href="product-layout1.html" class="grid-view-item__link border"><img
                                                        class="grid-view-item__image blur-up lazyloaded"
                                                        data-src="{{asset('assets/images/products/product-12.jpg')}}"
                                                        src="{{asset('assets/images/products/product-12.jpg')}}"
                                                        alt="product"/></a>
                                            </div>
                                            <div class="details position-relative ms-3">
                                                <div class="product-name fw-500 d-block text-uppercase"><a
                                                        href="product-layout1.html">Print Sleeve sweaters</a></div>
                                                <div class="product-price my-1 pb-1"><span class="price">$99.00</span>
                                                </div>
                                                <div
                                                    class="product-review d-flex align-items-center justify-content-start">
                                                    <i class="an an-star"></i> <i class="an an-star"></i> <i
                                                        class="an an-star"></i><i class="an an-star"></i> <i
                                                        class="an an-star-o"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-10">
                                        <div class="mini-list-item d-flex">
                                            <div class="mini-view_image">
                                                <a href="product-layout1.html" class="grid-view-item__link border"><img
                                                        class="grid-view-item__image blur-up lazyloaded"
                                                        data-src="{{asset('assets/images/products/product-13.jpg')}}"
                                                        src="{{asset('assets/images/products/product-13.jpg')}}"
                                                        alt="product"/></a>
                                            </div>
                                            <div class="details position-relative ms-3">
                                                <div class="product-name fw-500 d-block"><a href="product-layout1.html">Stand
                                                        Collar Slim Shirt</a></div>
                                                <div class="product-price my-1 pb-1"><span
                                                        class="old-price">$199.00</span><span
                                                        class="price">$219.00</span></div>
                                                <div
                                                    class="product-review d-flex align-items-center justify-content-start">
                                                    <i class="an an-star"></i> <i class="an an-star"></i> <i
                                                        class="an an-star"></i><i class="an an-star"></i> <i
                                                        class="an an-star"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-0">
                                        <div class="mini-list-item d-flex">
                                            <div class="mini-view_image">
                                                <a href="product-layout1.html" class="grid-view-item__link border"><img
                                                        class="grid-view-item__image blur-up lazyloaded"
                                                        data-src="{{asset('assets/images/products/product-14.jpg')}}"
                                                        src="{{asset('assets/images/products/product-14.jpg')}}"
                                                        alt="product"/></a>
                                            </div>
                                            <div class="details position-relative ms-3">
                                                <div class="product-name fw-500 d-block text-uppercase"><a
                                                        href="product-layout1.html">Knit Formal Shirts</a></div>
                                                <div class="product-price my-1 pb-1"><span class="price">$199.00</span>
                                                </div>
                                                <div
                                                    class="product-review d-flex align-items-center justify-content-start">
                                                    <i class="an an-star"></i> <i class="an an-star"></i> <i
                                                        class="an an-star"></i><i class="an an-star-o"></i> <i
                                                        class="an an-star-o"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End You May Also Like-->
                </div>
                <!--End Sidebar-->
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 col-right">
                    <!--Product Content-->
                    <div class="product-single">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img thumb-right clearfix d-flex-wrap mb-3 mb-md-0">
                                    <div class="zoompro-wrap product-zoom-right">
                                        <div class="zoompro-span"><img ng-src="@{{imageUrl}}" id="zoompro"
                                                                       class="zoompro"
                                                                       alt="product"/></div>
                                        <div class="product-labels"><span class="lbl pr-label2 rounded">HOT</span><span
                                                class="lbl on-sale rounded">Sale</span></div>
                                        <div class="product-wish"><a class="wishIcon wishlist rounded m-0"
                                                                     href="my-wishlist.html"><i
                                                    class="icon an an-heart"></i><span class="tooltip-label left">Available in Wishlist</span></a>
                                        </div>
                                        <div class="product-buttons">
                                            <a href="#" class="btn rounded prlightbox"><i
                                                    class="icon an an-expand-l-arrows"></i><span class="tooltip-label">Zoom Image</span></a>
                                        </div>
                                    </div>

                                    <div class="lightboximages">
                                        <a href="{{asset('assets/images/products/product-7-1.jpg')}}"
                                           data-size="1000x1280"></a>
                                        <a href="{{asset('assets/images/products/product-7-2.jpg')}}"
                                           data-size="1000x1280"></a>
                                        <a href="{{asset('assets/images/products/product-7-3.jpg')}}"
                                           data-size="1000x1280"></a>
                                        <a href="{{asset('assets/images/products/product-7-4.jpg')}}"
                                           data-size="1000x1280"></a>
                                        <a href="{{asset('assets/images/products/product-7-5.jpg')}}"
                                           data-size="1000x1280"></a>
                                        <a href="{{asset('assets/images/products/product-7.jpg')}}"
                                           data-size="1000x1280"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12 col-12" align="center">
                                <!-- Product Info -->
                                <div class="product-single__meta">
                                    <h1 class="product-single__title" align="center">{{$findProduct->name_product}}</h1>
                                    <!-- Product Reviews -->
                                    <div class="product-review mb-2"><a class="reviewLink"
                                                                        href="#reviews"><i class="an an-star"></i><i
                                                class="an an-star mx-1"></i><i class="an an-star"></i><i
                                                class="an an-star mx-1"></i><i class="an an-star-o"></i><span
                                                class="spr-badge-caption ms-2">16 Reviews</span></a></div>
                                    <!-- End Product Reviews -->
                                    @php
                                        $colorString=explode(',',$findProduct->color);
                                            $colorString=array_map(function ($value){
                                                return explode('-',$value);
                                            },$colorString);
                                            $color=array_column($colorString,0);
                                            $code_color=array_column($colorString,1);
                                            $allStorage=explode(',',$findProduct->memory_storage)
                                    @endphp
                                        <!-- Swatches Color/Size -->
                                    <div class="row g-2 variable-select pb-2 w-100">
                                        <div class="product-form justify-content-center hidedropdown">
                                            <!-- Swatches Color -->
                                            <div class="swatches-color swatch clearfix swatch-0 option1"
                                                 data-option-index="0">
                                                <div class="product-form__item">
                                                    <label class="label d-flex justify-content-center">Màu Sắc</label>
                                                    <ul class="swatches d-flex-wrap justify-content-center list-unstyled clearfix">
                                                        @foreach($color as $key => $item)
                                                            <li ng-click="colorClick('{{$item}}')"
                                                                ng-class="{'active':'{{$showProduct->color===$item}}'}"
                                                                class="swatch-element color red available ">
                                                                <label class="swatchLbl rounded-circle color small"
                                                                       style="background-color:{{$code_color[$key]}}"></label>
                                                                <span class="tooltip-label top">{{$item}}</span>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Swatches Color -->
                                            <!-- Swatches Size -->
                                            <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                                <div class="product-form__item">
                                                    <label class="label d-flex justify-content-center">Bộ nhớ
                                                        trong</label>
                                                    <ul ng-model="storageClick"
                                                        class="swatches-size d-flex-center justify-content-center list-unstyled clearfix">
                                                        @foreach($allStorage as $item)
                                                            <li ng-click="storageClick('{{$item}}')"
                                                                class="swatch-element available {{$showProduct->memory_storage===$item?'active':''}} ">
                                                                <label class="swatchLbl medium">{{$item}}</label><span
                                                                    class="tooltip-label">{{$item}}</span>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Swatches Size -->
                                        </div>
                                    </div>
                                    <!-- End Swatches Color/Size -->
                                    <!-- Product Price -->
                                    <div class="product-single__price pb-1 real-price">
                                        <span class="visually-hidden">Regular price</span>
                                        <span class="product-price__sale--single">
                                                    <span
                                                        class="product-price__price product-price__sale"
                                                    >@{{ price }}</span>
                                        </span>
                                    </div>
                                    <!-- End Product Price -->
                                </div>
                                <!-- End Product Info -->
                                <!-- Product Form -->
                                <form method="post" action="#" class="product-form hidedropdown">
                                    <!-- Product Action -->
                                    <div class="product-action w-100 clearfix">
                                        <div class="row g-2">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="product-form__item--submit">
                                                    <button ng-click="editProductDetail()" name="add"
                                                            class="btn rounded product-form__cart-submit mb-0"
                                                            style="color: #fff">Sửa
                                                    </button>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="agree-check customCheckbox clearfix d-none">
                                            <input id="prTearm" name="tearm" type="checkbox" value="tearm" required/>
                                            <label for="prTearm">I agree with the terms and conditions</label>
                                        </div>
                                    </div>
                                    <!-- End Product Action -->
                                </form>
                                <!-- End Product Form -->
                            </div>
                        </div>
                    </div>
                    <!--Product Content-->
                    <!--Product Tabs-->
                    <div class="tabs-listing mt-2 mt-md-5" align="center">
                        {{$showProduct->description}}
                    </div>
                    <!--End Product Tabs-->
                </div>
            </div>
            <!--End Main Content-->
        </div>
    </div>
    <!--End Body Container-->
    <script>
        const app = angular.module("myapp", []);
        app.controller('detailController', function ($scope, $http, $window) {
            $scope.price = "{{number_format($showProduct->price)}}";
            $scope.imageUrl = "{{$showProduct->image}}";
            $scope.quantity = 1;
            $scope.findProduct =@json($findProduct);
            $scope.showProduct =@json($showProduct);
            let id = "{{$request->id}}";
            let image = $scope.showProduct.image;
            let price = $scope.showProduct.price;
            let color = $scope.showProduct.color;
            let storage = $scope.showProduct.memory_storage;
            $scope.allColor = $scope.findProduct.color.split(",");
            $scope.storageClick = function (item) {
                storage = item
                $http(
                    {
                        method: "Post",
                        url: "{{$request->slug}}",
                        data: {
                            'upstorage': item,
                        }
                    }
                ).then(function successCallback(response) {
                        $scope.price = response.data.price
                        price = response.data.price;
                    }, function errorCallback(response) {
                        alert('Thất Bại')
                    }
                )
            }
            $scope.colorClick = function (item) {
                color = item
                $http(
                    {
                        method: "Post",
                        url: "{{$request->slug}}",
                        data: {
                            'color': item,
                        }
                    }
                ).then(function successCallback(response) {
                        $scope.imageUrl = response.data.image;
                        image = response.data.image
                    }, function errorCallback(response) {
                        console.log(response)
                    }
                )
            }
            $scope.editProductDetail = function () {
                let nameProduct = "{{$findProduct->name_product}}";
                $http({
                    method: "post",
                    url: '{{route('client.editProductDetail')}}',
                    data: {
                        'id': id,
                        'nameProduct': nameProduct,
                        'storage': storage,
                        'color': color,
                        'price': price,
                        'image': image,
                    }
                }).then(function successCallBack(response) {
                    console.log(response)
                    $window.location.href = '{{route('client.cart')}}'
                }, function errorCallBack(response) {
                    console.log(response)
                })
            }
        })
    </script>
@endsection

