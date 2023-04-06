@extends('web.index')
@section('content')
    <!--Body Container-->
    <div id="page-content">
        <!-- Collection Banner -->
        <div class="collection-header">
            <div class="collection-hero large">
                <div class="collection-hero__image blur-up lazyload"></div>
                <div class="collection-hero__title-wrapper container">
                    <h1 class="collection-hero__title medium">Tất cả sản phẩm liên quan tới {{$request->category}}</h1>
                    <div class="breadcrumbs text-uppercase mt-2"><a href="{{route('client.home')}}" title="Back to the home page">Home</a><span>|</span><span class="fw-bold">{{$request->category}}</span></div>
                </div>
            </div>
        </div>
        <!-- End Collection Banner -->

        <div class="container">
            <div class="row">
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <!--Active Filters-->
                    <ul class="active-filters d-flex flex-wrap align-items-center m-0 list-unstyled d-none">
                        <li><a href="#">Clear all</a></li>
                        <li><a href="#">Men <i class="an an-times-l"></i></a></li>
                        <li><a href="#">Neckalses <i class="an an-times-l"></i></a></li>
                        <li><a href="#">Accessories <i class="an an-times-l"></i></a></li>
                    </ul>
                    <!--End Active Filters-->
                    <!--Toolbar-->
                    <div class="toolbar mt-0">
                        <div class="filters-toolbar-wrapper">
                            <ul class="list-unstyled d-flex align-items-center">
                                <li class="product-count d-flex align-items-center">
                                    <button type="button" class="btn btn-filter an an-slider-3 d-inline-flex d-lg-none me-2 me-sm-3"><span class="hidden">Filter</span></button>
                                    <div class="filters-toolbar__item">
                                        <span class="filters-toolbar__product-count d-none d-sm-block">Showing: 21 products</span>
                                    </div>
                                </li>
                                <li class="collection-view ms-sm-auto">
                                    <div class="filters-toolbar__item collection-view-as d-flex align-items-center me-3 me-lg-0">
                                        <a href="javascript:void(0)" class="change-view prd-grid change-view--active"><i class="icon an an-th" aria-hidden="true"></i><span class="tooltip-label">Grid View</span></a>
                                        <a href="javascript:void(0)" class="change-view prd-list"><i class="icon an an-th-list" aria-hidden="true"></i><span class="tooltip-label">List View</span></a>
                                    </div>
                                </li>
                                <li class="filters-sort ms-auto ms-sm-0 d-lg-none">
                                    <div class="filters-toolbar__item">
                                        <label for="SortBy2" class="hidden">Sort by:</label>
                                        <select name="SortBy2" id="SortBy2" class="filters-toolbar__input filters-toolbar__input--sort">
                                            <option value="featured" selected="selected">Featured</option>
                                            <option value="best-selling">Best selling</option>
                                            <option value="title-ascending">Alphabetically, A-Z</option>
                                            <option value="title-descending">Alphabetically, Z-A</option>
                                            <option value="price-ascending">Price, low to high</option>
                                            <option value="price-descending">Price, high to low</option>
                                            <option value="created-ascending">Date, old to new</option>
                                            <option value="created-descending">Date, new to old</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Toolbar-->

                    <!--Product List-->
                    <div class="product-load-more">
                        <!--Product Grid-->
                        <div class="grid-products grid--view-items prd-grid">
                            <div class="row">
                                @foreach($category as $key => $value)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!--Start Product Image-->
                                    <div class="product-image">
                                        <!--Start Product Image-->
                                        <a href="{{route('client.detail',['product'=>$value->cate_product,'slug'=>$value->slug])}}" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{$value->image}}" src="{{$value->image}}" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{$value->image}}" src="{{$value->image}}" alt="image" title="">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale rounded">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!--End Product Image-->
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
                                            <span class="price">{{number_format($value->price)}}₫</span>
                                        </div>
                                        <!--End Product Price-->
                                    </div>
                                    <!--End Product Details-->
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!--End Product Grid-->

                        <!--Load More Button-->
                        <div class="infinitpaginOuter">
                            <div class="infinitpagin">
                                <a href="#" class="btn rounded loadMore">Load More</a>
                            </div>
                        </div>
                        <!--End Load More Button-->
                    </div>
                    <!--End Product List-->

                    <!--Collection Description-->
                    <div class="collection-description mt-4 pt-2">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard reader dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen the book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                    <!--End Collection Description-->
                </div>
                <!--End Main Content-->
            </div>
        </div>
    </div>
    <!--End Body Container-->
@endsection
