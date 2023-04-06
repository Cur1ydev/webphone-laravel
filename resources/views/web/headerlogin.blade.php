<!-- Page Loader -->
<div id="pre-loader"><img src="{{asset('assets/images/loader.gif')}}" alt="Loading..."/></div>
<!-- End Page Loader -->

<!--Page Wrapper-->
<div class="page-wrapper">
    <!--Topbar-->
    <div class="top-info-bar style1">
        <div class="topBar-slider-style1 alert fade show" role="alert">
            <div class="item text-center d-flex d-flex-justify-center lh-base">
                Special Offer. Grab the item before price raised up. Sale end in :
                <!--Countdown Timer-->
                <div class="promo-counter days-time" data-countdown="2024/10/01"></div>
                <!--End Countdown Timer-->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                        class="an an-times-l"></i></button>
            </div>
            <div class="item text-center d-flex d-flex-justify-center lh-base">
                FREE shipping on orders over $150
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                        class="an an-times-l"></i></button>
            </div>
        </div>
    </div>
    <!--End Topbar-->

    <!--Header wrap-->
    <div class="header-main header-7">
        <!--Header-->
        <header id="header" class="header header-wrap d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <!--Logo / Menu Toggle-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 align-self-center justify-content-start d-flex">
                        <!--Mobile Toggle-->
                        <button type="button"
                                class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none">
                            <i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i></button>
                        <!--End Mobile Toggle-->
                        <!--Logo-->
                        <div class="logo d-flex-center"><a href="{{route('client.home')}}"><img class="logo-img mh-100"
                                                                                                src="{{asset('assets/images/logo-demo17-1.png')}}"
                                                                                                alt="Optimal Multipurpose eCommerce Bootstrap 5 Html Template"
                                                                                                title="Optimal Multipurpose eCommerce Bootstrap 5 Html Template"
                                                                                                width="120"/><span
                                    class="logo-txt d-none">Optimal</span></a></div>
                        <!--End Logo-->
                    </div>
                    <!--End Logo / Menu Toggle-->
                    <!--Search Inline-->
                    <div class="col-1 col-sm-1 col-md-1 col-lg-8 d-none d-lg-block">
                        <form class="form minisearch search-inline w-100 px-5" id="header-search1"
                              action="{{route('client.search')}}" method="get">
                            <label class="label d-none"><span>Search</span></label>
                            <div class="control">
                                <div class="searchField d-flex">
                                    <div class="search-category">
                                        <select id="rgsearch-category1" name="rgsearch[category]"
                                                data-default="All Categories" class="rounded-start bg-transparent">
                                            <option value="00" label="All Categories" selected="selected">All
                                                Categories
                                            </option>
                                            <optgroup id="rgsearch-shop1" label="Shop">
                                                <option value="0">- All</option>
                                                <option value="1">- Men</option>
                                                <option value="2">- Women</option>
                                                <option value="3">- Shoes</option>
                                                <option value="4">- Blouses</option>
                                                <option value="5">- Pullovers</option>
                                                <option value="6">- Bags</option>
                                                <option value="7">- Accessories</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="input-box d-flex w-100">
                                        <input type="text" name="search" placeholder="Tìm kiếm sản phẩm"
                                               value="{{old('search')}}"
                                               class="input-text bg-transparent rounded-0 border-start-0 border-end-0">
                                        <button type="submit" title="Search"
                                                class="action search bg-transparent rounded-end"><i
                                                class="icon an an-search-l"></i></button>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                    <!--End Search Inline-->
                    <!--Right Action-->
                    <div
                        class="col-6 col-sm-6 col-md-6 col-lg-2 align-self-center icons-col text-right d-flex justify-content-end">
                        <!--Search-->
                        <div class="site-search iconset d-block d-lg-none"><i class="icon an an-search-l"></i><span
                                class="tooltip-label">Search</span></div>
                        <!--End Search-->
                        <!--Wishlist-->
                        <div class="wishlist-link iconset d-none"><i class="icon an an-heart-l"></i><span
                                class="wishlist-count counter d-flex-center justify-content-center position-absolute translate-middle rounded-circle">0</span><span
                                class="tooltip-label">Wishlist</span></div>
                        <!--End Wishlist-->
                        <!--Setting Dropdown-->
                        <div class="user-link iconset flex-lg-column"><i class="icon an an-user-expand"></i><span
                                class="text d-none d-lg-flex">ACCOUNT</span></div>
                        <div id="userLinks" class="mt-lg-3">
                            <ul class="user-links">
                                <li><h6>Xin chào {{session()->get('client')}}</h6></li>
                                <li><a href="{{route('client.showcartoder')}}">Đơn hàng đã mua</a></li>
                                <li><a href="{{route('client.logout')}}">Log out</a></li>
                            </ul>
                        </div>
                        <!--End Setting Dropdown-->
                        <!--Minicart Drawer-->
                        <div class="header-cart iconset flex-lg-column">
                            <a href="#" class="site-header__cart btn-minicart d-flex-justify-center flex-lg-column"
                               data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                                <i class="icon an an-sq-bag"></i><span class="text d-none d-lg-flex">CART</span><span
                                    class="site-cart-count counter d-flex-center justify-content-center position-absolute rounded-circle">{{$totalCart->total}}</span>
                            </a>
                        </div>
                        <!--End Minicart Drawer-->
                        <!--Setting Dropdown-->
                        <div class="setting-link iconset flex-lg-column pe-0"><i class="icon an an-globe"></i><span
                                class="tooltip-label">Settings</span></div>
                        <div id="settingsBox" class="mt-lg-3">
                            <div class="currency-picker">
                                <span class="ttl">Select Currency</span>
                                <ul id="currencies" class="cnrLangList">
                                    <li class="selected"><a href="#;" class="active">INR</a></li>
                                    <li><a href="#;">GBP</a></li>
                                    <li><a href="#;">CAD</a></li>
                                    <li><a href="#;">USD</a></li>
                                    <li><a href="#;">AUD</a></li>
                                    <li><a href="#;">EUR</a></li>
                                    <li><a href="#;">JPY</a></li>
                                </ul>
                            </div>
                            <div class="language-picker">
                                <span class="ttl">SELECT LANGUAGE</span>
                                <ul id="language" class="cnrLangList">
                                    <li><a href="#" class="active">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Setting Dropdown-->
                    </div>
                    <!--End Right Action-->
                </div>
            </div>
            <!--Search Popup-->
            <div id="search-popup" class="search-drawer">
                <div class="container">
                    <span class="closeSearch an an-times-l"></span>
                    <form class="form minisearch" id="header-search" action="#" method="get">
                        <label class="label"><span>Search</span></label>
                        <div class="control">
                            <div class="searchField">
                                <div class="search-category">
                                    <select id="rgsearch-category" name="rgsearch[category]"
                                            data-default="All Categories">
                                        <option value="00" label="All Categories" selected="selected">All Categories
                                        </option>
                                        <optgroup id="rgsearch-shop" label="Shop">
                                            <option value="0">- All</option>
                                            <option value="1">- Men</option>
                                            <option value="2">- Women</option>
                                            <option value="3">- Shoes</option>
                                            <option value="4">- Blouses</option>
                                            <option value="5">- Pullovers</option>
                                            <option value="6">- Bags</option>
                                            <option value="7">- Accessories</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <button type="submit" title="Search" class="action search rounded-0"><i
                                            class="icon an an-search-l"></i></button>
                                    <input type="text" name="q" value="" placeholder="Search by keyword or #"
                                           class="input-text rounded-0">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Search Popup-->
        </header>
        <!--End Header-->
        <!--Main Navigation Desktop-->
        <div class="menu-outer d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-12 align-self-center d-menu-col">
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="{{route('client.home')}}">Home <i
                                            class="an an-angle-down-l"></i></a>

                                </li>
                                @foreach($allCateProduct as $item => $value)
                                    <li class="lvl1 parent megamenu"><a
                                            href="{{route('client.category',['category'=>$value->slug])}}">{{$value->cate_product}}
                                            <i class="an an-angle-down-l"></i></a>

                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Main Navigation Desktop-->
    </div>
    <!--End Header wrap-->
