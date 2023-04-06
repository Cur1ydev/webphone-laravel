@extends('web.index')
@section('content')
    <!--Body Container-->
    <div id="page-content">
        <!--Home Slider-->
        <section class="slideshow slideshow-wrapper">
            <div class="home-slideshow">
                <div class="slide slide1">
                    <div class="slideshow--large bg-size">
                        <img class="bg-img blur-up lazyload"
                             data-src="{{asset('assets/images/slideshow/demo22-banner1.jpg')}}"
                             src="{{asset('assets/images/slideshow/demo22-banner1.jpg')}}" alt="slideshow" title=""/>
                        <div class="container">
                            <div
                                class="slideshow-content slideshow-overlay middle-left d-flex justify-content-center align-items-center">
                                <div class="slideshow-content-in text-left">
                                    <div class="wrap-caption animation style2 p-0">
                                        <h2 class="mega-title ss-mega-title text-transform-none mb-3 fw-bold">Making
                                            <br>Brand Visible</h2>
                                        <span class="mega-subtitle ss-sub-title">Runs faster. Costs less and never breaks.<br>We like to make things look pretty.</span>
                                        <div class="ss-btnWrap">
                                            <a class="btn btn-lg rounded-0" href="shop-top-filter.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slideshow--large bg-size">
                        <img class="bg-img blur-up lazyload"
                             data-src="{{asset('assets/images/slideshow/demo22-banner2.jpg')}}"
                             src="{{asset('assets/images/slideshow/demo22-banner2.jpg')}}" alt="slideshow" title=""/>
                        <div class="container">
                            <div
                                class="slideshow-content slideshow-overlay middle-left d-flex justify-content-center align-items-center">
                                <div class="slideshow-content-in text-left">
                                    <div class="wrap-caption animation style2 p-0">
                                        <p class="ss-small-title mb-1">New Arrivals</p>
                                        <h2 class="mega-title ss-mega-title text-transform-none mb-3 fw-bold">Your New
                                            <br>Superpower</h2>
                                        <span class="mega-subtitle ss-sub-title">The most advanced dual-camera <br>system ever on iOS. From $899</span>
                                        <div class="ss-btnWrap">
                                            <a class="btn btn-lg rounded-0" href="shop-top-filter.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Home Slider-->

        <!--Featured Content-->
        <section class="section featured-content style1 p-0">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column">
                            <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-1 order-md-0 order-sm-0">
                                <div class="f-image">
                                    <img class="blur-up lazyload"
                                         data-src="{{asset('assets/images/content/demo22-smartwatch.jpg')}}"
                                         src="{{asset('assets/images/content/demo22-smartwatch.jpg')}}" alt="image"
                                         title=""/>
                                </div>
                            </div>
                            <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-0 order-md-0 order-sm-0">
                                <div class="f-text text-black">
                                    <h2 class="text-black text-transform-none mb-2 mb-md-3">SMART WATCH</h2>
                                    <div class="rte rte-setting d-flex mb-3 mb-md-4">
                                        <p>The World's First Smart Band With Body Temperature</p>
                                    </div>
                                    <a href="shop-top-filter.html" class="btn mt20">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                        <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column">
                            <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-1 order-md-1 order-sm-1">
                                <div class="f-image">
                                    <img class="blur-up lazyload"
                                         data-src="{{asset('assets/images/content/demo22-earbud.jpg')}}"
                                         src="{{asset('assets/images/content/demo22-earbud.jpg')}}" alt="image"
                                         title=""/>
                                </div>
                            </div>
                            <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-0 order-md-0 order-sm-0">
                                <div class="f-text text-black">
                                    <h2 class="text-black text-transform-none mb-2 mb-md-3">EARBUDS</h2>
                                    <div class="rte rte-setting d-flex mb-3 mb-md-4">
                                        <p>Best in class driver &amp; chipset for deep bass and PRO audio.</p>
                                    </div>
                                    <a href="shop-top-filter.html" class="btn mt20">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                        <div
                            class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column clr-f5">
                            <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-0 order-md-0 order-sm-0">
                                <div class="f-image">
                                    <img class="blur-up lazyload"
                                         data-src="{{asset('assets/images/content/demo22-headphone.jpg')}}"
                                         src="{{asset('assets/images/content/demo22-headphone.jpg')}}" alt="image"
                                         title=""/>
                                </div>
                            </div>
                            <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-1 order-md-1 order-sm-1">
                                <div class="f-text text-black">
                                    <h2 class="text-black text-transform-none mb-2 mb-md-3">BEATS SOLO</h2>
                                    <div class="rte rte-setting d-flex mb-3 mb-md-4">
                                        <p>Elevate Your Music. Buy the Beats By Dre urBeats Wired In-Ear Headphone</p>
                                    </div>
                                    <a href="shop-top-filter.html" class="btn mt20">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                        <div
                            class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column clr-f5">
                            <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-0 order-md-1 order-sm-1">
                                <div class="f-image">
                                    <img class="blur-up lazyload"
                                         data-src="{{asset('assets/images/content/demo22-phone.jpg')}}"
                                         src="{{asset('assets/images/content/demo22-phone.jpg')}}" alt="image"
                                         title=""/>
                                </div>
                            </div>
                            <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-1 order-md-0 order-sm-0">
                                <div class="f-text text-black">
                                    <h2 class="text-black text-transform-none mb-2 mb-md-3">GALAXY S22 ULTRA</h2>
                                    <div class="rte rte-setting d-flex mb-3 mb-md-4">
                                        <p>Our smoothest scrolling screen with Super Smooth 120 Hz</p>
                                    </div>
                                    <a href="shop-top-filter.html" class="btn mt20">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Featured Content-->

        <!--Special Offers With Tabs-->
        <section class="section product-slider tab-slider-product">
            <div class="container">
                <div class="section-header">
                    <h2 class="text-transform-none">Danh Mục Sản Phẩm Bán Chạy</h2>
                </div>
                <div class="tabs-listing">
                    <div class="tab_container">
                        <h3 class="tab_drawer_heading d_active body-font text-uppercase text-center" rel="tab1">Exciting
                            Offers For You <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                        <div id="tab1" class="tab_content grid-products">
                            <div class="row">
                                @foreach($featureProduct as $item => $value)
                                    <div class="item col-lg-3 col-md-4 col-6">
                                        <!--Start Product Image-->
                                        <div class="product-image">
                                            <!--Start Product Image-->
                                            <a href="{{route('client.detail',['product'=>$value->cate_product,'slug'=>$value->slug])}}" class="product-img">
                                                <!--Image-->
                                                <img class="primary blur-up lazyload" data-src="{{$value->image}}"
                                                     src="{{$value->image}}" alt="product" title="">
                                                <!--End Image-->
                                                <!--Hover Image-->
                                                <img class="hover blur-up lazyload" data-src="{{$value->image}}"
                                                     src="{{$value->image}}" alt="product" title="">
                                                <!--End Hover Image-->
                                            </a>
                                            <!--End Product Image-->
                                        </div>
                                        <!--End Product Image-->
                                        <!--Start Product Details-->
                                        <div class="product-details text-start">
                                            <!--Product Name-->
                                            <div class="product-name" align="center">
                                                <h6>
                                                    {{$value->name_product}}</h6>
                                            </div>
                                            <!--End Product Name-->
                                            <!--Product Price-->
                                            <div class="product-price" align="center">
                                                <span class="price"><h5
                                                            style="color: #0066CC">{{number_format($value->price)}}₫</h5></span>
                                            </div>
                                            <!--End Product Price-->

                                        </div>
                                        <!--End Product Details-->
                                    </div>
                                @endforeach
                            </div>

                            <div class="view-collection text-center mt-3 mt-md-4">
                                <a href="shop-left-sidebar.html" class="btn btn-lg rounded-0">View All</a>
                            </div>
                        </div>

                        <h3 class="tab_drawer_heading body-font text-uppercase text-center" rel="tab2">Most Popular <i
                                class="an an-angle-down-r" aria-hidden="true"></i></h3>
                        <div id="tab2" class="grid-products tab_content">
                            <div class="row">
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product4.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product4.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product4-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product4-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Apple iPhone 13
                                                Midnight</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$700.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star-o"></i> <i class="an an-star-o"></i> <i
                                                class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product1-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product1-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Camera TZ85 optical 30
                                                white DMC</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$500.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product3.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product3.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product3-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product3-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Xiaomi Redmi Note 9 Global
                                                Version</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$500.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product2.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product2.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product2-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product2-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                        <!--Countdown Timer-->
                                        <div class="saleTime desktop" data-countdown="2024/10/01"></div>
                                        <!--End Countdown Timer-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Apple Watch Series 2</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="old-price">$650.00</span> <span class="price">$600.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product7.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product7.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product7-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product7-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Xbox One Wireless
                                                Controller</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$1400.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product5.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product5.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product5-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product5-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">1080p Wi-Fi Security
                                                Camera</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$25.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product6.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product6.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product6-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product6-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Samsung-1TB-T5-Portable-Drive</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$600.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product8.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product8.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product8-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product8-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">13‑inch MacBook Pro</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$1500.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                            </div>

                            <div class="view-collection text-center mt-3 mt-md-4">
                                <a href="shop-left-sidebar.html" class="btn btn-lg rounded-0">View All</a>
                            </div>
                        </div>

                        <h3 class="tab_drawer_heading body-font text-uppercase text-center" rel="tab3">Newest <i
                                class="an an-angle-down-r" aria-hidden="true"></i></h3>
                        <div id="tab3" class="grid-products tab_content">
                            <div class="row">
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product7.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product7.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product7-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product7-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Xbox One Wireless
                                                Controller</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$1400.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product5.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product5.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product5-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product5-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">1080p Wi-Fi Security
                                                Camera</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$25.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product6.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product6.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product6-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product6-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Samsung-1TB-T5-Portable-Drive</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$600.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product8.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product8.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product8-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product8-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">13‑inch MacBook Pro</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$1500.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product4.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product4.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product4-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product4-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Apple iPhone 13
                                                Midnight</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$700.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star-o"></i> <i class="an an-star-o"></i> <i
                                                class="an an-star-o"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product1-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product1-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Camera TZ85 optical 30
                                                white DMC</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$500.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product3.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product3.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product3-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product3-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Xiaomi Redmi Note 9 Global
                                                Version</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="price">$500.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                <div class="item col-lg-3 col-md-4 col-6">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="product-layout1.html" class="product-img">
                                            <!--Image-->
                                            <img class="primary blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product2.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product2.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Image-->
                                            <!--Hover Image-->
                                            <img class="hover blur-up lazyload"
                                                 data-src="{{asset('assets/images/products/digital-product2-1.jpg')}}"
                                                 src="{{asset('assets/images/products/digital-product2-1.jpg')}}"
                                                 alt="product" title="">
                                            <!--End Hover Image-->
                                        </a>
                                        <!--End Product Image-->
                                        <!-- product label -->
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                        <!-- End product label -->
                                        <!--Countdown Timer-->
                                        <div class="saleTime desktop" data-countdown="2024/10/01"></div>
                                        <!--End Countdown Timer-->
                                        <!--Product Button-->
                                        <div class="button-set style2 d-none d-md-block">
                                            <ul>
                                                <!--Cart Button-->
                                                <li><a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                       href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                        <span class="tooltip-label top">Add to Cart</span></a></li>
                                                <!--End Cart Button-->
                                                <!--Quick View Button-->
                                                <li><a class="btn-icon quick-view-popup quick-view"
                                                       href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#content_quickview"><i
                                                            class="icon an an-search-l"></i> <span
                                                            class="tooltip-label top">Quick View</span></a></li>
                                                <!--End Quick View Button-->
                                                <!--Wishlist Button-->
                                                <li><a class="btn-icon wishlist add-to-wishlist"
                                                       href="my-wishlist.html"><i class="icon an an-heart-l"></i> <span
                                                            class="tooltip-label top">Add To Wishlist</span></a></li>
                                                <!--End Wishlist Button-->
                                                <!--Compare Button-->
                                                <li><a class="btn-icon compare add-to-compare"
                                                       href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                        <span class="tooltip-label top">Add to Compare</span></a></li>
                                                <!--End Compare Button-->
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!--End Product Image-->
                                    <!--Start Product Details-->
                                    <div class="product-details text-start">
                                        <!--Product Name-->
                                        <div class="product-name">
                                            <a href="product-layout1.html" class="fw-normal">Apple Watch Series 2</a>
                                        </div>
                                        <!--End Product Name-->
                                        <!--Product Price-->
                                        <div class="product-price">
                                            <span class="old-price">$650.00</span> <span class="price">$600.00</span>
                                        </div>
                                        <!--End Product Price-->
                                        <!--Product Review-->
                                        <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star"></i> <i
                                                class="an an-star"></i> <i class="an an-star-o"></i></div>
                                        <!--End Product Review-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                            </div>

                            <div class="view-collection text-center mt-3 mt-md-4">
                                <a href="shop-left-sidebar.html" class="btn btn-lg rounded-0">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Special Offers With Tabs-->


        <!--Category Banner-->
        <div class="section parallax-banner-style1 py-0">
            <div class="hero hero--medium hero__overlay bg-size">
                <img class="bg-img" src="{{asset('assets/images/parallax/demo22-shop-category-banner.jpg')}}"
                     alt="image"/>
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text center text-small">
                            <h2 class="mega-title fw-600 text-transform-none text-white mb-4 mb-md-5">Shop By
                                Category</h2>
                            <div class="row g-3 justify-content-center category-lists">
                                <div class="item w-auto"><a href="shop-category-slideshow.html"
                                                            class="btn m-0">Audio</a></div>
                                <div class="item w-auto"><a href="shop-category-slideshow.html" class="btn m-0">Smart
                                        Watches</a></div>
                                <div class="item w-auto"><a href="shop-category-slideshow.html" class="btn m-0">Kitchen
                                        Appliances</a></div>
                                <div class="item w-auto"><a href="shop-category-slideshow.html" class="btn m-0">Home
                                        Appliances</a></div>
                                <div class="item w-auto"><a href="shop-category-slideshow.html" class="btn m-0">Mobile
                                        Accessories</a></div>
                                <div class="item w-auto"><a href="shop-category-slideshow.html" class="btn m-0">Television</a>
                                </div>
                                <div class="item w-auto"><a href="shop-category-slideshow.html" class="btn m-0">Mobile
                                        Phones</a></div>
                                <div class="item w-auto"><a href="shop-category-slideshow.html" class="btn m-0">Laptop
                                        &amp; Ipad</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Category Banner-->

        <!--Promo bar-->
        <div class="top-info-bar style1 promoMsg">
            <div class="topBar-slider-style1 alert fade show" role="alert">
                <div class="item text-center d-flex d-flex-justify-center lh-base">
                    Best Deals and Lowest Price on Top Brands : <b>Upto 50% Off on Refrigerators</b>
                </div>
                <div class="item text-center d-flex d-flex-justify-center lh-base">
                    Best Deals and Lowest Price on Top Brands : <b>Upto 60% off on Televisions</b>
                </div>
            </div>
        </div>
        <!--End Promo bar-->

        {{--        Danh mục iPhone--}}
        <section class="section product-slider">
            <div class="container">
                <div class="row">
                    <div class="section-header text-uppercase col-12">
                        <h2>Danh Mục iPhone</h2>
                    </div>
                </div>
                <div class="productSlider grid-products">
                    @foreach($iphoneProduct as $item => $value)
                        <div class="item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="{{route('client.detail',['product'=>$value->cate_product,'slug'=>$value->slug])}}" class="product-img">
                                    <!--Image-->
                                    <img class="primary blur-up lazyload" data-src="{{$value->image}}"
                                         src="{{$value->image}}" alt="image" title="" width="800" height="960">
                                    <!--End image-->
                                    <!--Hover image-->
                                    <img class="hover blur-up lazyload" data-src="{{$value->image}}"
                                         src="{{$value->image}}" alt="image" title="" width="800" height="960">
                                    <!--End hover image-->
                                </a>
                                <!--End Product Image-->
                                <!--Product label-->
                                <div class="product-labels"><span class="lbl pr-label1 rounded">New</span></div>
                                <!--Product label-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <h6>{{$value->name_product}}</h6>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">{{number_format($value->price)}}</span>₫
                                </div>
                                <!--End Product Price-->

                            </div>
                            <!--End Product Details-->
                        </div>
                    @endforeach
                </div>
                <div class="view-collection text-center mt-3 mt-md-4">
                    <a href="iphone" class="btn btn-lg rounded-0">Xem tất cả iPhone</a>
                </div>
            </div>
        </section>
        {{--        Danh mục iPhone--}}

        {{--        Danh mục Macbook--}}
        <section class="section product-slider">
            <div class="container">
                <div class="row">
                    <div class="section-header text-uppercase col-12">
                        <h2>Danh Mục MacBook</h2>
                    </div>
                </div>
                <div class="productSlider grid-products">
                    @foreach($macbookProduct as $item => $value)
                        <div class="item">
                            <!--Start Product Image-->
                            <div class="product-image">
                                <!--Start Product Image-->
                                <a href="{{route('client.detail',['product'=>$value->cate_product,'slug'=>$value->slug])}}" class="product-img">
                                    <!--Image-->
                                    <img class="primary blur-up lazyload" data-src="{{$value->image}}"
                                         src="{{$value->image}}" alt="image" title="" width="800" height="960">
                                    <!--End image-->
                                    <!--Hover image-->
                                    <img class="hover blur-up lazyload" data-src="{{$value->image}}"
                                         src="{{$value->image}}" alt="image" title="" width="800" height="960">
                                    <!--End hover image-->
                                </a>
                                <!--End Product Image-->
                                <!--Product label-->
                                <div class="product-labels"><span class="lbl pr-label1 rounded">New</span></div>
                                <!--Product label-->
                            </div>
                            <!--End Product Image-->
                            <!--Start Product Details-->
                            <div class="product-details text-center">
                                <!--Product Name-->
                                <div class="product-name text-uppercase">
                                    <h6>{{$value->name_product}}</h6>
                                </div>
                                <!--End Product Name-->
                                <!--Product Price-->
                                <div class="product-price">
                                    <span class="price">{{number_format($value->price)}}</span>
                                </div>
                                <!--End Product Price-->

                            </div>
                            <!--End Product Details-->
                        </div>
                    @endforeach
                </div>
                <div class="view-collection text-center mt-3 mt-md-4">
                    <a href="macbook" class="btn btn-lg rounded-0">Xem tất cả MacBook</a>
                </div>
            </div>
        </section>
        {{--        Danh mục Macbook--}}
        <!--Banner Masonary-->
        <section class="section collection-banners style8 mt-0">
            <div class="container">
                <div class="grid-masonary banner-grid grid-mr-30">
                    <div class="grid-sizer col-12 col-sm-12 col-md-6 col-lg-6 mw-100"></div>
                    <div class="row mx-0">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mw-100 cl-item banner-item">
                            <div class="collection-grid-item banner1">
                                <a href="shop-right-sidebar.html">
                                    <div class="img"><img class="blur-up lazyload"
                                                          data-src="{{asset('assets/images/collection/demo22-water-purifier.jpg')}}"
                                                          src="{{asset('assets/images/collection/demo22-water-purifier.jpg')}}"
                                                          alt="collection" title=""/></div>
                                    <div class="details center-left w-50">
                                        <div class="inner">
                                            <h3 class="title lh-1">WATER <br>PURIFIER</h3>
                                            <p class="subtitle mt-3 mb-0">India's True Water Purifier</p>
                                            <span class="btn btn-outline-primary mt-3 mt-sm-4">Shop Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mw-100 cl-item banner-item">
                            <div class="collection-grid-item banner2">
                                <a href="shop-right-sidebar.html">
                                    <div class="img"><img class="blur-up lazyload"
                                                          data-src="{{asset('assets/images/collection/demo22-vacuum-cleaner.jpg')}}"
                                                          src="{{asset('assets/images/collection/demo22-vacuum-cleaner.jpg')}}"
                                                          alt="collection" title=""/></div>
                                    <div class="details center-left w-50">
                                        <div class="inner">
                                            <p class="subtitle mb-3">Experience the<br> latest innovation</p>
                                            <h3 class="title lh-1">VACUUM <br>CLEANER</h3>
                                            <span class="btn btn-outline-primary mt-3 mt-sm-4">Shop Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mw-100 cl-item banner-item">
                            <div class="collection-grid-item banner3">
                                <a href="shop-right-sidebar.html">
                                    <div class="img"><img class="blur-up lazyload"
                                                          data-src="{{asset('assets/images/collection/demo22-selling-appliances.jpg')}}"
                                                          src="{{asset('assets/images/collection/demo22-selling-appliances.jpg')}}"
                                                          alt="collection" title=""/></div>
                                    <div class="details center-right text-center">
                                        <div class="inner">
                                            <h3 class="title">TOP SELLING HOME <br>APPLIANCES</h3>
                                            <p class="subtitle mt-2 mt-lg-3 mb-0 small--hide">All exclusive only for you
                                                with <br>affordable prices</p>
                                            <span
                                                class="btn btn-outline-primary mt-3 mt-lg-4 small--hide">Shop Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Masonary-->

        <!--Store Feature-->
        <section class="section store-features pt-0">
            <div class="container">
                <div class="section-header">
                    <h2 class="text-transform-none">Browse with Ease <br>Shop with Confidence</h2>
                </div>

                <div class="row store-info">
                    <div
                        class="col-12 col-sm-6 col-md-3 col-lg-3 d-flex flex-column align-items-center text-center mb-4 mb-md-0">
                        <i class="icon an an-ship-fast m-0"></i>
                        <div class="detail mt-3">
                            <h4 class="body-font">Free Shipping</h4>
                            <p class="sub-text">Avail Free &amp; Safe shipping in serviceable pin codes. Check before
                                you place an order.</p>
                        </div>
                    </div>
                    <div
                        class="col-12 col-sm-6 col-md-3 col-lg-3 d-flex flex-column align-items-center text-center mb-4 mb-md-0">
                        <i class="icon an an-payment-security m-0"></i>
                        <div class="detail mt-3">
                            <h4 class="body-font">Secure Payments</h4>
                            <p class="sub-text">Your data security &amp; privacy is our priority. Pay securely through
                                128 bit encrypted payment gateway</p>
                        </div>
                    </div>
                    <div
                        class="col-12 col-sm-6 col-md-3 col-lg-3 d-flex flex-column align-items-center text-center mb-4 mb-sm-3 mb-md-0">
                        <i class="icon an an-tags-l m-0"></i>
                        <div class="detail mt-3">
                            <h4 class="body-font">Exclusive Offers</h4>
                            <p class="sub-text">Now enjoy the benefits of JL exclusive offers. Subscribe JL .com to
                                remain updated on latest offers</p>
                        </div>
                    </div>
                    <div
                        class="col-12 col-sm-6 col-md-3 col-lg-3 d-flex flex-column align-items-center text-center mb-3 mb-md-0">
                        <i class="icon an an-tools m-0"></i>
                        <div class="detail mt-3">
                            <h4 class="body-font">Hassle Free Installation</h4>
                            <p class="sub-text">Once you place order on JL.com your installation request will be
                                generated post-delivery</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Store Feature-->

        <!--Blog Post-->
        <section class="section home-blog-post clr-fa">
            <div class="container">
                <div class="section-header">
                    <h2 class="text-transform-none">Latest News</h2>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="blog-post-slider">
                            <div class="blogpost-item mb-0">
                                <a href="blog-single-post.html" class="post-thumb"><img class="blur-up lazyload"
                                                                                        src="{{asset('assets/images/blog/demo22-post-1.jpg')}}"
                                                                                        data-src="{{asset('assets/images/blog/demo22-post-1.jpg')}}"
                                                                                        alt="blog" title=""/></a>
                                <div class="post-detail">
                                    <h4 class="post-title"><a href="blog-single-post.html">Top Tips for Your Appliance
                                            Shopping</a></h4>
                                    <ul class="publish-detail d-flex-center">
                                        <li class="d-flex align-items-center"><i class="an an-calendar me-2 d-none"></i>
                                            <span class="article__date">March 06, 2022</span></li>
                                        <li class="d-flex align-items-center"><i
                                                class="an an-comments-l me-2 d-none"></i> <a href="#;"
                                                                                             class="article-link">14
                                                comment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blogpost-item mb-0">
                                <a href="blog-single-post.html" class="post-thumb"><img class="blur-up lazyload"
                                                                                        src="{{asset('assets/images/blog/demo22-post-2.jpg')}}"
                                                                                        data-src="{{asset('assets/images/blog/demo22-post-2.jpg')}}"
                                                                                        alt="image" title=""/></a>
                                <div class="post-detail">
                                    <h4 class="post-title"><a href="blog-single-post.html">What's New in Android 13
                                            Developer Preview 1?</a></h4>
                                    <ul class="publish-detail d-flex-center">
                                        <li class="d-flex align-items-center"><i class="an an-calendar me-2 d-none"></i>
                                            <span class="article__date">April 25, 2022</span></li>
                                        <li class="d-flex align-items-center"><i
                                                class="an an-comments-l me-2 d-none"></i> <a href="#;"
                                                                                             class="article-link">10
                                                comment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blogpost-item mb-0">
                                <a href="blog-single-post.html" class="post-thumb"><img class="blur-up lazyload"
                                                                                        src="{{asset('assets/images/blog/demo22-post-3.jpg')}}"
                                                                                        data-src="{{asset('assets/images/blog/demo22-post-3.jpg')}}"
                                                                                        alt="image" title=""/></a>
                                <div class="post-detail">
                                    <h4 class="post-title"><a href="blog-single-post.html">Review: Apple Watch Series 7
                                            Aluminum</a></h4>
                                    <ul class="publish-detail d-flex-center">
                                        <li class="d-flex align-items-center"><i class="an an-calendar me-2 d-none"></i>
                                            <span class="article__date">May 13, 2022</span></li>
                                        <li class="d-flex align-items-center"><i
                                                class="an an-comments-l me-2 d-none"></i> <a href="#;"
                                                                                             class="article-link">0
                                                comment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Blog Post-->
    </div>
    <!--End Body Container-->
@endsection
