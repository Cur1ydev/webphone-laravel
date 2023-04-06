<!--Footer-->
<div class="footer footer-1">
    <div class="footer-top bg-white clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 newsletter-col mt-0 pb-4 pb-lg-0">
                    <div class="display-table">
                        <div class="display-table-cell footer-newsletter">
                            <form action="#" method="post">
                                <label class="h4 body-font">NEWSLETTER SIGN UP</label>
                                <p>Enter your email to receive daily news and get 20% off coupon for all items.</p>
                                <div class="input-group">
                                    <input type="email"
                                           class="brounded-start input-group__field newsletter-input rounded-0 mb-0"
                                           name="EMAIL" value="" placeholder="Email address" required>
                                    <span class="input-group__btn"><button type="submit"
                                                                           class="btn newsletter__submit rounded-0"
                                                                           name="commit" id="Subscribe"><i
                                                class="an an-envelope-l"></i></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="list-inline social-icons mt-3 pt-1">
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Facebook"><i class="an an-facebook"
                                                                            aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Twitter"><i class="an an-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Pinterest"><i class="an an-pinterest-p"
                                                                             aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Instagram"><i class="an an-instagram"
                                                                             aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="TikTok"><i class="an an-tiktok"
                                                                          aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Whatsapp"><i class="an an-whatsapp"
                                                                            aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 ps-lg-5 footer-links">
                    <h4 class="h4 body-font">Informations</h4>
                    <ul>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="aboutus-style1.html">About us</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="privacy-policy.html">Privacy policy</a></li>
                        <li><a href="#">Terms &amp; condition</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                    <h4 class="h4 body-font">Customer Services</h4>
                    <ul>
                        <li><a href="#">Request Personal Data</a></li>
                        <li><a href="faqs-style1.html">FAQ's</a></li>
                        <li><a href="contact-style1.html">Contact Us</a></li>
                        <li><a href="#">Orders and Returns</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">Shipping &amp; Delivery</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 ps-lg-5 footer-contact pt-4 pt-md-0">
                    <img class="mb-4" src="{{asset('assets/images/logo-demo17-2.png')}}" width="120" alt="Optimal"/>
                    <p class="mb-2">55 Gallaxy Enque, 2568 steet, 23568 NY</p>
                    <p class="mb-2">Phone: <a href="tel:(440)0000000000">(440) 000 000 0000</a></p>
                    <p class="mb-0">Email: <a href="mailto:info@example.com">info@example.com</a></p>
                    <img class="mt-4" src="{{asset('assets/images/payment.png')}}" alt="Paypal Visa Payments"/>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-light clearfix">
        <div class="container">
            <div class="copytext text-center text-uppercase">&copy; 2023 Optimal. All Rights Reserved.</div>
        </div>
    </div>
</div>
<!--End Footer-->

<!--Scoll Top-->
<span id="site-scroll"><i class="icon an an-chevron-up"></i></span>
<!--End Scoll Top-->

<!--MiniCart Drawer-->
<div class="minicart-right-drawer modal right fade" id="minicart-drawer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="cart-drawer" class="block block-cart">
                <div class="minicart-header">
                    <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close"><i
                            class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Close"></i></a>
                    <h4 class="fs-6">Your cart ({{$totalCart->total}} Items)</h4>
                </div>
                <div class="minicart-content">
                    <ul class="m-0 clearfix">
                        @foreach($cart as $item => $value)
                        <li class="item d-flex justify-content-center align-items-center">
                            <div class="product-image">
                                <img class="blur-up lazyload"
                                     src="{{$value->image}}"
                                     data-src="{{$value->image}}" alt="image"
                                     title=""/>
                            </div>
                            <div class="product-details">
                                <h6 class="product-title">{{$value->name_product}}</h6>
                                <div class="variant-cart my-1">{{$value->color}} / {{$value->memory_storage}}</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">{{number_format($value->total_price)}}₫</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <input type="text" name="quantity" value="{{$value->total_quantity}}" class="qty rounded-0" disabled>
                                    </div>
                                </div>
                                <a href="deleteCart/{{ $value->id }}" class="remove"><i class="an an-times-r" data-bs-toggle="tooltip"
                                                              data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="minicart-bottom">
                    <div class="shipinfo text-center mb-3 text-uppercase">
                        <p class="freeShipMsg"><i class="an an-truck fs-5 me-2 align-middle"></i><b>FREE SHIPPING</b>
                            ELIGIBLE</p>
                    </div>
                    <a href="checkout-style2.html"
                       class="w-100 px-2 py-2 lh-base my-2 my-2 btn btn-outline-primary proceed-to-checkout">Proceed to
                        Checkout</a>
                    <a href="{{route('client.cart')}}" class="w-100 btn btn-primary py-2 lh-base cart-btn">View Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End MiniCart Drawer-->
<div class="modalOverly"></div>

<!--Quickview Popup-->
<div class="loadingBox">
    <div class="an-spin"><i class="icon an an-spinner4"></i></div>
</div>
<div id="quickView-modal" class="mfp-with-anim mfp-hide">
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
            <!--Model thumbnail -->
            <div id="quickView" class="carousel slide">
                <!-- Image Slide carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active" data-bs-slide-number="0">
                        <img class="blur-up lazyload"
                             data-src="{{asset('assets/images/products/digital-product1.jpg')}}"
                             src="{{asset('assets/images/products/digital-product1.jpg')}}" alt="image" title=""/>
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="1">
                        <img class="blur-up lazyload"
                             data-src="{{asset('assets/images/products/digital-product2.jpg')}}"
                             src="{{asset('assets/images/products/digital-product2.jpg')}}" alt="image" title=""/>
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="2">
                        <img class="blur-up lazyload"
                             data-src="{{asset('assets/images/products/digital-product3.jpg')}}"
                             src="{{asset('assets/images/products/digital-product3.jpg')}}" alt="image" title=""/>
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="3">
                        <img class="blur-up lazyload"
                             data-src="{{asset('assets/images/products/digital-product4.jpg')}}"
                             src="{{asset('assets/images/products/digital-product4.jpg')}}" alt="image" title=""/>
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="4">
                        <img class="blur-up lazyload"
                             data-src="{{asset('assets/images/products/digital-product5.jpg')}}"
                             src="{{asset('assets/images/products/digital-product5.jpg')}}" alt="image" title=""/>
                    </div>
                </div>
                <!-- End Image Slide carousel items -->
                <!-- Thumbnail image -->
                <div class="model-thumbnail-img">
                    <!-- Thumbnail slide -->
                    <div class="carousel-indicators list-inline">
                        <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0"
                             data-bs-target="#quickView">
                            <img class="blur-up lazyload"
                                 data-src="{{asset('assets/images/products/digital-product1.jpg')}}"
                                 src="{{asset('assets/images/products/digital-product1.jpg')}}" alt="image" title=""/>
                        </div>
                        <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1"
                             data-bs-target="#quickView">
                            <img class="blur-up lazyload"
                                 data-src="{{asset('assets/images/products/digital-product2.jpg')}}"
                                 src="{{asset('assets/images/products/digital-product2.jpg')}}" alt="image" title=""/>
                        </div>
                        <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2"
                             data-bs-target="#quickView">
                            <img class="blur-up lazyload"
                                 data-src="{{asset('assets/images/products/digital-product3.jpg')}}"
                                 src="{{asset('assets/images/products/digital-product3.jpg')}}" alt="image" title=""/>
                        </div>
                        <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3"
                             data-bs-target="#quickView">
                            <img class="blur-up lazyload"
                                 data-src="{{asset('assets/images/products/digital-product4.jpg')}}"
                                 src="{{asset('assets/images/products/digital-product4.jpg')}}" alt="image" title=""/>
                        </div>
                        <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4"
                             data-bs-target="#quickView">
                            <img class="blur-up lazyload"
                                 data-src="{{asset('assets/images/products/digital-product5.jpg')}}"
                                 src="{{asset('assets/images/products/digital-product5.jpg')}}" alt="image" title=""/>
                        </div>
                    </div>
                    <!-- End Thumbnail slide -->
                    <!-- Carousel arrow button -->
                    <a class="carousel-control-prev carousel-arrow" href="#quickView" data-bs-target="#quickView"
                       data-bs-slide="prev"><i class="icon an-3x an an-angle-left"></i><span class="visually-hidden">Previous</span></a>
                    <a class="carousel-control-next carousel-arrow" href="#quickView" data-bs-target="#quickView"
                       data-bs-slide="next"><i class="icon an-3x an an-angle-right"></i><span class="visually-hidden">Next</span></a>
                    <!-- End Carousel arrow button -->
                </div>
                <!-- End Thumbnail image -->
            </div>
            <!--End Model thumbnail -->
            <div class="text-center mt-3"><a href="product-layout1.html">VIEW MORE DETAILS</a></div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <h2 class="product-title">Product Quick View Popup</h2>
            <div class="product-review d-flex-center mb-2">
                <div class="rating"><i class="icon an an-star"></i><i class="icon an an-star"></i><i
                        class="icon an an-star"></i><i class="icon an an-star"></i><i class="icon an an-star-o"></i>
                </div>
                <div class="reviews ms-2"><a href="#">5 Reviews</a></div>
            </div>
            <div class="product-info">
                <p class="product-vendor">Vendor: <span class="fw-normal"><a href="#"
                                                                             class="fw-normal">Optimal</a></span></p>
                <p class="product-type">Product Type: <span class="fw-normal">Tops</span></p>
                <p class="product-sku">SKU: <span class="fw-normal">50-ABC</span></p>
            </div>
            <div class="pro-stockLbl my-2">
                <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> In stock</span></span>
                <span class="d-flex-center stockLbl preorder d-none"><i class="icon an an-clock-r"></i><span> Pre-order Now</span></span>
                <span class="d-flex-center stockLbl outstock d-none"><i
                        class="icon an an-times-cil"></i> <span>Sold out</span></span>
                <span class="d-flex-center stockLbl lowstock d-none" data-qty="15"><i
                        class="icon an an-exclamation-cir"></i><span> Order now, Only  <span class="items">10</span>  left!</span></span>
            </div>
            <div class="pricebox">
                <span class="price old-price">$400.00</span><span class="price product-price__sale">$300.00</span>
            </div>
            <div class="sort-description">Optimal Multipurpose Bootstrap 5 Html Template that will give you and your
                customers a smooth shopping experience which can be used for various kinds of stores such as fashion..
            </div>
            <form method="post" action="#" id="product_form--option" class="product-form">
                <div class="product-options d-flex-wrap">
                    <div class="swatch clearfix swatch-0 option1">
                        <div class="product-form__item">
                            <label class="label d-flex">Color:<span class="required d-none">*</span> <span
                                    class="slVariant ms-1 fw-bold">Black</span></label>
                            <ul class="swatches-image swatches d-flex-wrap list-unstyled clearfix">
                                <li data-value="Black" class="swatch-element color available active">
                                    <label class="rounded-0 swatchLbl small color black" title="Black"></label>
                                    <span class="tooltip-label top">Black</span>
                                </li>
                                <li data-value="Green" class="swatch-element color available">
                                    <label class="rounded-0 swatchLbl small color green" title="Green"></label>
                                    <span class="tooltip-label top">Green</span>
                                </li>
                                <li data-value="Orange" class="swatch-element color available">
                                    <label class="rounded-0 swatchLbl small color orange" title="Orange"></label>
                                    <span class="tooltip-label top">Orange</span>
                                </li>
                                <li data-value="Blue" class="swatch-element color available">
                                    <label class="rounded-0 swatchLbl small color blue" title="Blue"></label>
                                    <span class="tooltip-label top">Blue</span>
                                </li>
                                <li data-value="Red" class="swatch-element color available">
                                    <label class="rounded-0 swatchLbl small color red" title="Red"></label>
                                    <span class="tooltip-label top">Red</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="swatch clearfix swatch-1 option2">
                        <div class="product-form__item">
                            <label class="label">Size:<span class="required d-none">*</span> <span
                                    class="slVariant ms-1 fw-bold">XS</span></label>
                            <ul class="swatches-size d-flex-center list-unstyled clearfix swatch-1 option2">
                                <li data-value="XS" class="swatch-element xs available active">
                                    <label class="swatchLbl rounded-0 medium" title="XS">XS</label>
                                    <span class="tooltip-label">XS</span>
                                </li>
                                <li data-value="S" class="swatch-element s available">
                                    <label class="swatchLbl rounded-0 medium" title="S">S</label>
                                    <span class="tooltip-label">S</span>
                                </li>
                                <li data-value="M" class="swatch-element m available">
                                    <label class="swatchLbl rounded-0 medium" title="M">M</label>
                                    <span class="tooltip-label">M</span>
                                </li>
                                <li data-value="L" class="swatch-element l available">
                                    <label class="swatchLbl rounded-0 medium" title="L">L</label>
                                    <span class="tooltip-label">L</span>
                                </li>
                                <li data-value="XL" class="swatch-element xl available">
                                    <label class="swatchLbl rounded-0 medium" title="XL">XL</label>
                                    <span class="tooltip-label">XL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-action d-flex-wrap w-100 mb-3 clearfix">
                        <div class="quantity">
                            <div class="qtyField rounded">
                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r"
                                                                                      aria-hidden="true"></i></a>
                                <input type="text" name="quantity" value="1" class="product-form__input qty rounded-0">
                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-l"
                                                                                     aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="add-to-cart ms-3 fl-1">
                            <button type="button" class="btn button-cart rounded-0"><span>Add to cart</span></button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="wishlist-btn d-flex-center">
                <a class="add-wishlist d-flex-center text-uppercase me-3" href="my-wishlist.html"
                   title="Add to Wishlist"><i class="icon an an-heart-l me-1"></i> <span>Add to Wishlist</span></a>
                <a class="add-compare d-flex-center text-uppercase" href="compare-style1.html" title="Add to Compare"><i
                        class="icon an an-random-r me-2"></i> <span>Add to Compare</span></a>
            </div>
            <!-- Social Sharing -->
            <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                <span class="sharing-lbl me-2">Share :</span>
                <a href="#" class="d-flex-center btn btn-link btn--share share-facebook" data-bs-toggle="tooltip"
                   data-bs-placement="top" title="Share on Facebook"><i class="icon an an-facebook mx-1"></i><span
                        class="share-title d-none">Facebook</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-twitter" data-bs-toggle="tooltip"
                   data-bs-placement="top" title="Tweet on Twitter"><i class="icon an an-twitter mx-1"></i><span
                        class="share-title d-none">Tweet</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest" data-bs-toggle="tooltip"
                   data-bs-placement="top" title="Pin on Pinterest"><i class="icon an an-pinterest-p mx-1"></i> <span
                        class="share-title d-none">Pin it</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin" data-bs-toggle="tooltip"
                   data-bs-placement="top" title="Share on Instagram"><i class="icon an an-instagram mx-1"></i><span
                        class="share-title d-none">Instagram</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp" data-bs-toggle="tooltip"
                   data-bs-placement="top" title="Share on WhatsApp"><i class="icon an an-whatsapp mx-1"></i><span
                        class="share-title d-none">WhatsApp</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip"
                   data-bs-placement="top" title="Share by Email"><i class="icon an an-envelope-l mx-1"></i><span
                        class="share-title d-none">Email</span></a>
            </div>
            <!-- End Social Sharing -->
        </div>
    </div>
</div>
<!--End Quickview Popup-->

<!--Addtocart Added Popup-->
<div id="pro-addtocart-popup" class="mfp-with-anim mfp-hide">
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    <div class="addtocart-inner text-center clearfix">
        <h4 class="title mb-3 text-success">Added to your shopping cart successfully.</h4>
        <div class="pro-img mb-3">
            <img class="img-fluid blur-up lazyload" src="{{asset('assets/images/products/digital-product4.jpg')}}"
                 data-src="{{asset('assets/images/products/digital-product4.jpg')}}"
                 alt="Added to your shopping cart successfully." title="Added to your shopping cart successfully."/>
        </div>
        <div class="pro-details">
            <h5 class="pro-name body-font mb-0">Cushioned Office Chair</h5>
            <p class="sku my-2">Color: Gray</p>
            <p class="mb-0 qty-total">1 X $113.88</p>
            <div class="addcart-total bg-light mt-3 mb-3 p-2">
                Total: <b class="price">$113.88</b>
            </div>
            <div class="button-action">
                <a href="checkout-style1.html" class="btn btn-primary view-cart mx-1 py-2 rounded-0">Go To Checkout</a>
                <a href="index.html" class="btn btn-outline-primary py-2 rounded-0">Continue Shopping</a>
            </div>
        </div>
    </div>
</div>
<!-- End Addtocart Added Popup-->

