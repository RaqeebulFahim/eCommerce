<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/ecomus/product-style-07.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 04:03:33 GMT -->
<head>
    <meta charset="utf-8">
    <title>Ecomus - Ultimate HTML</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- font -->
   <link rel="stylesheet" href="{{asset('front_assets')}}/fonts/fonts.css">
   <!-- Icons -->
   <link rel="stylesheet" href="{{asset('front_assets')}}/fonts/font-icons.css">
   <link rel="stylesheet" href="{{asset('front_assets')}}/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{asset('front_assets')}}/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="{{asset('front_assets')}}/css/animate.css">
   <link rel="stylesheet" href="{{asset('front_assets')}}/sibforms.com/forms/end-form/build/sib-styles.css">
   <link rel="stylesheet"type="text/css" href="{{asset('front_assets')}}/css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('front_assets')}}/images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('front_assets')}}/images/logo/favicon.png">

</head>

<body class="preload-wrapper">
    <!-- RTL -->
    <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-hover-btn btn-fill">RTL</a>
    <!-- /RTL  -->
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        <!-- top-bar -->
        @include('layout.frontend.header')
        <!-- /header -->

        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">New Arrival</div>
                        <p class="text-center text-2 text_black-2 mt_5">Shop through our latest selection of Fashion</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->
        <section class="flat-spacing-1">
            <div class="container">
                <div class="tf-shop-control grid-3 align-items-center">
                    <div class="tf-control-filter">
                        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filter</span></a>
                    </div>
                    <ul class="tf-control-layout d-flex justify-content-center">
                        <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                            <div class="item"><span class="icon icon-list"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                            <div class="item"><span class="icon icon-grid-2"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                            <div class="item"><span class="icon icon-grid-3"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-4 active" data-value-layout="tf-col-4">
                            <div class="item"><span class="icon icon-grid-4"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-5" data-value-layout="tf-col-5">
                            <div class="item"><span class="icon icon-grid-5"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-6" data-value-layout="tf-col-6">
                            <div class="item"><span class="icon icon-grid-6"></span></div>
                        </li>
                    </ul>
                    <div class="tf-control-sorting d-flex justify-content-end">
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Featured</span>
                                <span class="icon icon-arrow-down"></span>
                            </div>
                            <div class="dropdown-menu">
                                <div class="select-item active">
                                    <span class="text-value-item">Featured</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Best selling</span>
                                </div>
                                <div class="select-item" data-sort-value="a-z">
                                    <span class="text-value-item">Alphabetically, A-Z</span>
                                </div>
                                <div class="select-item" data-sort-value="z-a">
                                    <span class="text-value-item">Alphabetically, Z-A</span>
                                </div>
                                <div class="select-item" data-sort-value="price-low-high">
                                    <span class="text-value-item">Price, low to high</span>
                                </div>
                                <div class="select-item" data-sort-value="price-high-low">
                                    <span class="text-value-item">Price, high to low</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, old to new</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, new to old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop">
                        <div id="product-count-grid" class="count-text"></div>
                        <div id="product-count-list" class="count-text"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters" style="display: none;">Remove All <i class="icon icon-close"></i></button>
                    </div>
                    <div class="tf-list-layout wrapper-shop" id="listLayout">
                        <!-- card product 1 -->
                        <div class="card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="#" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/orange-1.jpg" src="{{asset('front_assets')}}/images/products/orange-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/white-1.jpg" src="{{asset('front_assets')}}/images/products/white-1.jpg" alt="image-product">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Ribbed Tank Top</a>
                                <span class="price current-price">$16.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose — responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item hover-tooltip color-swatch active">
                                        <span class="tooltip tooltip-bottom">Orange</span>
                                        <span class="swatch-value bg_orange-3"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/orange-1.jpg" src="{{asset('front_assets')}}/images/products/orange-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-1.jpg" src="{{asset('front_assets')}}/images/products/black-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-1.jpg" src="{{asset('front_assets')}}/images/products/white-1.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3 hover-tooltip"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3 hover-tooltip"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3 hover-tooltip"><span class="icon icon-compare"></span> <span class="tooltip">Add to Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview style-3 hover-tooltip"><span class="icon icon-view"></span><span class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 2 -->
                        <div class="card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/brown.jpg" src="{{asset('front_assets')}}/images/products/brown.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/purple.jpg" src="{{asset('front_assets')}}/images/products/purple.jpg" alt="image-product">
                                </div>
                                <div class="countdown-box">
                                    <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Ribbed modal T-shirt</a>
                                <span class="price current-price">$18.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose — responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/brown.jpg" src="{{asset('front_assets')}}/images/products/brown.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Purple</span>
                                        <span class="swatch-value bg_purple"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/purple.jpg" src="{{asset('front_assets')}}/images/products/purple.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/green.jpg" src="{{asset('front_assets')}}/images/products/green.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span class="icon icon-compare"></span> <span class="tooltip">Add to Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview style-3"><span class="icon icon-view"></span><span class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 3 -->
                        <div class="card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/white-3.jpg" src="{{asset('front_assets')}}/images/products/white-3.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/white-4.jpg" src="{{asset('front_assets')}}/images/products/white-4.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Oversized Printed T-shirt</a>
                                <span class="price current-price">$10.00</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose — responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span class="icon icon-compare"></span> <span class="tooltip">Add to Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview style-3"><span class="icon icon-view"></span><span class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 4 -->
                        <div class="card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/white-2.jpg" src="{{asset('front_assets')}}/images/products/white-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/pink-1.jpg" src="{{asset('front_assets')}}/images/products/pink-1.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Oversized Printed T-shirt</a>
                                <span class="price current-price">$16.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose — responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-2.jpg" src="{{asset('front_assets')}}/images/products/white-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Pink</span>
                                        <span class="swatch-value bg_purple"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/pink-1.jpg" src="{{asset('front_assets')}}/images/products/pink-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-2.jpg" src="{{asset('front_assets')}}/images/products/black-2.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span class="icon icon-compare"></span> <span class="tooltip">Add to Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview style-3"><span class="icon icon-view"></span><span class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 5 -->
                        <div class="card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/brown-2.jpg" src="{{asset('front_assets')}}/images/products/brown-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/brown-3.jpg" src="{{asset('front_assets')}}/images/products/brown-3.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">V-neck linen T-shirt</a>
                                <span class="price current-price">$114.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose — responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/brown-2.jpg" src="{{asset('front_assets')}}/images/products/brown-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-5.jpg" src="{{asset('front_assets')}}/images/products/white-5.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span class="icon icon-compare"></span> <span class="tooltip">Add to Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview style-3"><span class="icon icon-view"></span><span class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 6 -->
                        <div class="card-product list-layout" data-availability="In stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/light-green-1.jpg" src="{{asset('front_assets')}}/images/products/light-green-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/light-green-2.jpg" src="{{asset('front_assets')}}/images/products/light-green-2.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Loose Fit Sweatshirt</a>
                                <span class="price current-price">$10.00</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose — responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/light-green-1.jpg" src="{{asset('front_assets')}}/images/products/light-green-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-3.jpg" src="{{asset('front_assets')}}/images/products/black-3.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/blue.jpg" src="{{asset('front_assets')}}/images/products/blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/dark-blue.jpg" src="{{asset('front_assets')}}/images/products/dark-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-6.jpg" src="{{asset('front_assets')}}/images/products/white-6.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Grey</span>
                                        <span class="swatch-value bg_light-grey"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/light-grey.jpg" src="{{asset('front_assets')}}/images/products/light-grey.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span class="icon icon-compare"></span> <span class="tooltip">Add to Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview style-3"><span class="icon icon-view"></span><span class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 7 -->
                        <div class="card-product list-layout" data-availability="Out of stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/black-4.jpg" src="{{asset('front_assets')}}/images/products/black-4.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/black-5.jpg" src="{{asset('front_assets')}}/images/products/black-5.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Regular Fit Oxford Shirt</a>
                                <span class="price current-price">$10.00</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose — responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-4.jpg" src="{{asset('front_assets')}}/images/products/black-4.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/dark-blue-2.jpg" src="{{asset('front_assets')}}/images/products/dark-blue-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Beige</span>
                                        <span class="swatch-value bg_beige"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/beige.jpg" src="{{asset('front_assets')}}/images/products/beige.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Blue</span>
                                        <span class="swatch-value bg_light-blue"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/light-blue.jpg" src="{{asset('front_assets')}}/images/products/light-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-7.jpg" src="{{asset('front_assets')}}/images/products/white-7.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span class="icon icon-compare"></span> <span class="tooltip">Add to Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview style-3"><span class="icon icon-view"></span><span class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 8 -->
                        <div class="card-product list-layout" data-availability="Out of stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/white-8.jpg" src="{{asset('front_assets')}}/images/products/white-8.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/black-6.jpg" src="{{asset('front_assets')}}/images/products/black-6.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Loose Fit Hoodie</a>
                                <span class="price current-price">$9.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose — responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-8.jpg" src="{{asset('front_assets')}}/images/products/white-8.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-7.jpg" src="{{asset('front_assets')}}/images/products/black-7.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/blue-2.jpg" src="{{asset('front_assets')}}/images/products/blue-2.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span> <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span class="icon icon-compare"></span> <span class="tooltip">Add to Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview style-3"><span class="icon icon-view"></span><span class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- pagination -->
                        <ul class="wg-pagination tf-pagination-list justify-content-start">
                            <li class="active">
                                <a href="#" class="pagination-link">1</a>
                            </li>
                            <li>
                                <a href="#" class="pagination-link animate-hover-btn">2</a>
                            </li>
                            <li>
                                <a href="#" class="pagination-link animate-hover-btn">3</a>
                            </li>
                            <li>
                                <a href="#" class="pagination-link animate-hover-btn">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout">
                        <!-- card product 1 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/orange-1.jpg" src="{{asset('front_assets')}}/images/products/orange-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/white-1.jpg" src="{{asset('front_assets')}}/images/products/white-1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">Ribbed Tank Top</a>
                                <span class="price current-price">$16.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Orange</span>
                                        <span class="swatch-value bg_orange-3"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/orange-1.jpg" src="{{asset('front_assets')}}/images/products/orange-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-1.jpg" src="{{asset('front_assets')}}/images/products/black-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-1.jpg" src="{{asset('front_assets')}}/images/products/white-1.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 2 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/brown.jpg" src="{{asset('front_assets')}}/images/products/brown.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/purple.jpg" src="{{asset('front_assets')}}/images/products/purple.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span>M</span>
                                    <span>L</span>
                                    <span>XL</span>
                                </div>
                                <div class="countdown-box">
                                    <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">Ribbed modal T-shirt</a>
                                <span class="price current-price">From $18.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/brown.jpg" src="{{asset('front_assets')}}/images/products/brown.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Purple</span>
                                        <span class="swatch-value bg_purple"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/purple.jpg" src="{{asset('front_assets')}}/images/products/purple.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/green.jpg" src="{{asset('front_assets')}}/images/products/green.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 3 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/white-3.jpg" src="{{asset('front_assets')}}/images/products/white-3.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/white-4.jpg" src="{{asset('front_assets')}}/images/products/white-4.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-quick-add quick-add tf-btn-loading">
                                    <span class="text">ADD TO CART</span>
                                </a>
                                <a href="product-detail.html" class="title link">Oversized Printed T-shirt</a>
                                <span class="price current-price">$10.00</span>
                            </div>
                        </div>
                        <!-- card product 4 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/white-2.jpg" src="{{asset('front_assets')}}/images/products/white-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/pink-1.jpg" src="{{asset('front_assets')}}/images/products/pink-1.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title">Oversized Printed T-shirt</a>
                                <span class="price current-price">$16.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-2.jpg" src="{{asset('front_assets')}}/images/products/white-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Pink</span>
                                        <span class="swatch-value bg_purple"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/pink-1.jpg" src="{{asset('front_assets')}}/images/products/pink-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-2.jpg" src="{{asset('front_assets')}}/images/products/black-2.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 5 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/brown-2.jpg" src="{{asset('front_assets')}}/images/products/brown-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/brown-3.jpg" src="{{asset('front_assets')}}/images/products/brown-3.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">V-neck linen T-shirt</a>
                                <span class="price current-price">$114.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/brown-2.jpg" src="{{asset('front_assets')}}/images/products/brown-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-5.jpg" src="{{asset('front_assets')}}/images/products/white-5.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 6 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/light-green-1.jpg" src="{{asset('front_assets')}}/images/products/light-green-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/light-green-2.jpg" src="{{asset('front_assets')}}/images/products/light-green-2.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn absolute-2">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">Loose Fit Sweatshirt</a>
                                <span class="price current-price">$10.00</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/light-green-1.jpg" src="{{asset('front_assets')}}/images/products/light-green-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-3.jpg" src="{{asset('front_assets')}}/images/products/black-3.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/blue.jpg" src="{{asset('front_assets')}}/images/products/blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/dark-blue.jpg" src="{{asset('front_assets')}}/images/products/dark-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-6.jpg" src="{{asset('front_assets')}}/images/products/white-6.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Grey</span>
                                        <span class="swatch-value bg_light-grey"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/light-grey.jpg" src="{{asset('front_assets')}}/images/products/light-grey.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 7 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/black-4.jpg" src="{{asset('front_assets')}}/images/products/black-4.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/black-5.jpg" src="{{asset('front_assets')}}/images/products/black-5.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">Regular Fit Oxford Shirt</a>
                                <span class="price current-price">$10.00</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-4.jpg" src="{{asset('front_assets')}}/images/products/black-4.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/dark-blue-2.jpg" src="{{asset('front_assets')}}/images/products/dark-blue-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Beige</span>
                                        <span class="swatch-value bg_beige"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/beige.jpg" src="{{asset('front_assets')}}/images/products/beige.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Blue</span>
                                        <span class="swatch-value bg_light-blue"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/light-blue.jpg" src="{{asset('front_assets')}}/images/products/light-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-7.jpg" src="{{asset('front_assets')}}/images/products/white-7.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 8 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/white-8.jpg" src="{{asset('front_assets')}}/images/products/white-8.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/black-6.jpg" src="{{asset('front_assets')}}/images/products/black-6.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">Loose Fit Hoodie</a>
                                <span class="price current-price">$9.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-8.jpg" src="{{asset('front_assets')}}/images/products/white-8.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-7.jpg" src="{{asset('front_assets')}}/images/products/black-7.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/blue-2.jpg" src="{{asset('front_assets')}}/images/products/blue-2.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 9 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/brown-4.jpg" src="{{asset('front_assets')}}/images/products/brown-4.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/black-8.jpg" src="{{asset('front_assets')}}/images/products/black-8.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">Patterned scarf</a>
                                <span class="price current-price">$14.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/brown-4.jpg" src="{{asset('front_assets')}}/images/products/brown-4.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-8.jpg" src="{{asset('front_assets')}}/images/products/black-8.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 10 -->
                        <div class="card-product style-7 grid" data-availability="In stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/black-9.jpg" src="{{asset('front_assets')}}/images/products/black-9.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/black-10.jpg" src="{{asset('front_assets')}}/images/products/black-10.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                <span class="price current-price">$18.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-9.jpg" src="{{asset('front_assets')}}/images/products/black-9.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-9.jpg" src="{{asset('front_assets')}}/images/products/white-9.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 11 -->
                        <div class="card-product style-7 grid" data-availability="Out of stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/grey-2.jpg" src="{{asset('front_assets')}}/images/products/grey-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/grey.jpg" src="{{asset('front_assets')}}/images/products/grey.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                <span class="price current-price">$18.95</span>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Grey</span>
                                        <span class="swatch-value bg_grey"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/grey-2.jpg" src="{{asset('front_assets')}}/images/products/grey-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Pink</span>
                                        <span class="swatch-value bg_pink"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/pink-2.jpg" src="{{asset('front_assets')}}/images/products/pink-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Pink</span>
                                        <span class="swatch-value bg_light-pink"></span>
                                        <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/light-pink.jpg" src="{{asset('front_assets')}}/images/products/light-pink.jpg" alt="image-product">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- card product 12 -->
                        <div class="card-product style-7 grid" data-availability="Out of stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/black-11.jpg" src="{{asset('front_assets')}}/images/products/black-11.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/black-12.jpg" src="{{asset('front_assets')}}/images/products/black-12.jpg" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="javascript:void(0);" class="box-icon wishlist bg_white round btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#quick_add" data-bs-toggle="modal" class="btn-quick-add quick-add">QUICK ADD</a>
                                <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                <span class="price current-price">$18.95</span>
                            </div>
                        </div>
                        <!-- pagination -->
                        <ul class="wg-pagination tf-pagination-list">
                            <li class="active">
                                <a href="#" class="pagination-link">1</a>
                            </li>
                            <li>
                                <a href="#" class="pagination-link animate-hover-btn">2</a>
                            </li>
                            <li>
                                <a href="#" class="pagination-link animate-hover-btn">3</a>
                            </li>
                            <li>
                                <a href="#" class="pagination-link animate-hover-btn">4</a>
                            </li>
                            <li>
                                <a href="#" class="pagination-link animate-hover-btn">
                                    <span class="icon icon-arrow-right"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>


        <!-- footer -->
        @include('layout.frontend.footer')
        <!-- /footer -->

    </div>

    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /gotop -->

    <!-- toolbar-bottom -->
    <div class="tf-toolbar-bottom type-1150">
        <div class="toolbar-item active">
            <a href="#toolbarShopmb" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                <div class="toolbar-icon">
                    <i class="icon-shop"></i>
                </div>
                <div class="toolbar-label">Shop</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                <div class="toolbar-icon">
                    <i class="icon-fill"></i>
                </div>
                <div class="toolbar-label">Filter</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                <div class="toolbar-icon">
                    <i class="icon-search"></i>
                </div>
                <div class="toolbar-label">Search</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#login" data-bs-toggle="modal">
                <div class="toolbar-icon">
                    <i class="icon-account"></i>
                </div>
                <div class="toolbar-label">Account</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wishlist.html">
                <div class="toolbar-icon">
                    <i class="icon-heart"></i>
                    <div class="toolbar-count">0</div>
                </div>
                <div class="toolbar-label">Wishlist</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#shoppingCart" data-bs-toggle="modal">
                <div class="toolbar-icon">
                    <i class="icon-bag"></i>
                    <div class="toolbar-count">1</div>
                </div>
                <div class="toolbar-label">Cart</div>
            </a>
        </div>
    </div>
    <!-- /toolbar-bottom -->
    <!-- modalDemo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h5 class="demo-title">Ultimate HTML Theme</h5>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-01.jpg" src="{{asset('front_assets')}}/images/demo/home-01.jpg" alt="home-01">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span>Trend</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Fashion 01</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-multi-brand.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-multi-brand.jpg" src="{{asset('front_assets')}}/images/demo/home-multi-brand.jpg" alt="home-multi-brand">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Multi Brand</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-02.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-02.jpg" src="{{asset('front_assets')}}/images/demo/home-02.jpg" alt="home-02">
                                    <div class="demo-label">
                                        <span class="demo-hot">Hot</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Fashion 02</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-03.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-03.jpg" src="{{asset('front_assets')}}/images/demo/home-03.jpg" alt="home-03">
                                </div>
                                <span class="demo-name">Home Fashion 03</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-04.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-04.jpg" src="{{asset('front_assets')}}/images/demo/home-04.jpg" alt="home-04">
                                </div>
                                <span class="demo-name">Home Fashion 04</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-05.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-05.jpg" src="{{asset('front_assets')}}/images/demo/home-05.jpg" alt="home-05">
                                </div>
                                <span class="demo-name">Home Fashion 05</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-06.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-06.jpg" src="{{asset('front_assets')}}/images/demo/home-06.jpg" alt="home-06">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Fashion 06</span>
                            </a>
                        </div>
                        <div class="demo-item position-relative">
                            <a href="home-personalized-pod.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-personalized-pod.jpg" src="{{asset('front_assets')}}/images/demo/home-personalized-pod.jpg" alt="home-personalized-pod">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Personalized Pod</span>
                            </a>
                        </div>
                        <div class="demo-item position-relative">
                            <a href="home-pickleball.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-pickleball.png" src="{{asset('front_assets')}}/images/demo/home-pickleball.png" alt="home-pickleball">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Pickleball</span>
                            </a>
                        </div>
                        <div class="demo-item position-relative">
                            <a href="home-ceramic.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-ceramic.png" src="{{asset('front_assets')}}/images/demo/home-ceramic.png" alt="home-ceramic">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Ceramic</span>
                            </a>
                        </div>
                        <div class="demo-item position-relative">
                            <a href="home-food.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-food.png" src="{{asset('front_assets')}}/images/demo/home-food.png" alt="home-food">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Food</span>
                            </a>
                        </div>
                        <div class="demo-item position-relative">
                            <a href="home-camp-and-hike.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-camp-and-hike.png" src="{{asset('front_assets')}}/images/demo/home-camp-and-hike.png" alt="home-camp-and-hike">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Camp And Hike</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-07.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-07.jpg" src="{{asset('front_assets')}}/images/demo/home-07.jpg" alt="home-07">
                                </div>
                                <span class="demo-name">Home Fashion 07</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-08.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-08.jpg" src="{{asset('front_assets')}}/images/demo/home-08.jpg" alt="home-08">
                                </div>
                                <span class="demo-name">Home Fashion 08</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-skincare.jpg" src="{{asset('front_assets')}}/images/demo/home-skincare.jpg" alt="home-skincare">
                                </div>
                                <span class="demo-name">Home Skincare</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-headphone.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-headphone.jpg" src="{{asset('front_assets')}}/images/demo/home-headphone.jpg" alt="home-headphone">
                                </div>
                                <span class="demo-name">Home Headphone</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-giftcard.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-giftcard.jpg" src="{{asset('front_assets')}}/images/demo/home-giftcard.jpg" alt="home-gift-card">
                                </div>
                                <span class="demo-name">Home Gift Card</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-furniture.jpg" src="{{asset('front_assets')}}/images/demo/home-furniture.jpg" alt="home-furniture">
                                </div>
                                <span class="demo-name">Home Furniture</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture-02.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-furniture2.jpg" src="{{asset('front_assets')}}/images/demo/home-furniture2.jpg" alt="home-furniture-2">
                                </div>
                                <span class="demo-name">Home Furniture 2</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skateboard.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-skateboard.jpg" src="{{asset('front_assets')}}/images/demo/home-skateboard.jpg" alt="home-skateboard">
                                </div>
                                <span class="demo-name">Home Skateboard</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-stroller.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-stroller.jpg" src="{{asset('front_assets')}}/images/demo/home-stroller.jpg" alt="home-stroller">
                                </div>
                                <span class="demo-name">Home Stroller</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-decor.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-decor.jpg" src="{{asset('front_assets')}}/images/demo/home-decor.jpg" alt="home-decor">
                                </div>
                                <span class="demo-name">Home Decor</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-electronic.jpg" src="{{asset('front_assets')}}/images/demo/home-electronic.jpg" alt="home-electronic">
                                </div>
                                <span class="demo-name">Home Electronic</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-setup-gear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-setup-gear.jpg" src="{{asset('front_assets')}}/images/demo/home-setup-gear.jpg" alt="home-setup-gear">
                                </div>
                                <span class="demo-name">Home Setup Gear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-dog-accessories.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-dog-accessories.jpg" src="{{asset('front_assets')}}/images/demo/home-dog-accessories.jpg" alt="home-dog-accessories">
                                </div>
                                <span class="demo-name">Home Dog Accessories</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-kitchen-wear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-kitchen.jpg" src="{{asset('front_assets')}}/images/demo/home-kitchen.jpg" alt="home-kitchen-wear">
                                </div>
                                <span class="demo-name">Home Kitchen Wear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-phonecase.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-phonecase.jpg" src="{{asset('front_assets')}}/images/demo/home-phonecase.jpg" alt="home-phonecase">
                                </div>
                                <span class="demo-name">Home Phonecase</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-paddle-boards.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home_paddle_board.jpg" src="{{asset('front_assets')}}/images/demo/home_paddle_board.jpg" alt="home-paddle_board">
                                </div>
                                <span class="demo-name">Home Paddle Boards</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-glasses.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-glasses.jpg" src="{{asset('front_assets')}}/images/demo/home-glasses.jpg" alt="home-glasses">
                                </div>
                                <span class="demo-name">Home Glasses</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pod-store.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-pod-store.jpg" src="{{asset('front_assets')}}/images/demo/home-pod-store.jpg" alt="home-pod-store">
                                </div>
                                <span class="demo-name">Home POD Store</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-activewear.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-activewear.jpg" src="{{asset('front_assets')}}/images/demo/home-activewear.jpg" alt="home-activewear">
                                </div>
                                <span class="demo-name">Activewear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-handbag.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-handbag.jpg" src="{{asset('front_assets')}}/images/demo/home-handbag.jpg" alt="home-handbag">
                                </div>
                                <span class="demo-name">Home Handbag</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-tee.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-tee.jpg" src="{{asset('front_assets')}}/images/demo/home-tee.jpg" alt="home-tee">
                                </div>
                                <span class="demo-name">Home Tee</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sock.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-socks.jpg" src="{{asset('front_assets')}}/images/demo/home-socks.jpg" alt="home-sock">
                                </div>
                                <span class="demo-name">Home Sock</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewerly.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-jewelry.jpg" src="{{asset('front_assets')}}/images/demo/home-jewelry.jpg" alt="home-jewelry">
                                </div>
                                <span class="demo-name">Home Jewelry</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sneaker.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-sneaker.jpg" src="{{asset('front_assets')}}/images/demo/home-sneaker.jpg" alt="home-sneaker">
                                </div>
                                <span class="demo-name">Home Sneaker</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-accessories.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-accessories.jpg" src="{{asset('front_assets')}}/images/demo/home-accessories.jpg" alt="home-accessories">
                                </div>
                                <span class="demo-name">Home Accessories</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-grocery.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-gocery.jpg" src="{{asset('front_assets')}}/images/demo/home-gocery.jpg" alt="home-grocery">
                                </div>
                                <span class="demo-name">Home Grocery</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-baby.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-baby.jpg" src="{{asset('front_assets')}}/images/demo/home-baby.jpg" alt="home-baby">
                                </div>
                                <span class="demo-name">Home Baby</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-cosmetic.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-cosmetic.png" src="{{asset('front_assets')}}/images/demo/home-cosmetic.png" alt="home-cosmetic">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Cosmetic</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-plant.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-plant.png" src="{{asset('front_assets')}}/images/demo/home-plant.png" alt="home-plant">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Plant</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-swimwear.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-swimwear.png" src="{{asset('front_assets')}}/images/demo/home-swimwear.png" alt="home-swimwear">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Swimwear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electric-bike.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-electric-bike.png" src="{{asset('front_assets')}}/images/demo/home-electric-bike.png" alt="home-electric-bike">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Electric Bike</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-footwear.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-footwear.jpg" src="{{asset('front_assets')}}/images/demo/home-footwear.jpg" alt="home-footwear">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Footwear</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-book-store.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-bookstore.png" src="{{asset('front_assets')}}/images/demo/home-bookstore.png" alt="home-bookstore">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Bookstore</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-gaming-accessories.html">
                                <div class="demo-image position-relative">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-gaming-accessories.png" src="{{asset('front_assets')}}/images/demo/home-gaming-accessories.png" alt="home-gaming-accessories">
                                    <div class="demo-label">
                                        <span class="demo-new">New</span>
                                    </div>
                                </div>
                                <span class="demo-name">Home Gaming Accessories</span>
                            </a>
                        </div>
                        <div class="demo-item">
                            <a href="home-parallax.html">
                                <div class="demo-image">
                                    <img class="lazyload" data-src="{{asset('front_assets')}}/images/demo/home-skincare.jpg" src="{{asset('front_assets')}}/images/demo/home-skincare.jpg" alt="home-skincare">
                                </div>
                                <span class="demo-name">Home Parallax</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /modalDemo -->
    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-one" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-one">
                            <span>Home</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-one" class="collapse">
                            <ul class="sub-nav-menu" >
                                <li><a href="index.html" class="sub-nav-link">Home Fashion 01</a></li>
                                <li><a href="home-02.html" class="sub-nav-link">Home Fashion 02</a></li>
                                <li><a href="home-03.html" class="sub-nav-link">Home Fashion 03</a></li>
                                <li><a href="home-04.html" class="sub-nav-link">Home Fashion 04</a></li>
                                <li><a href="home-05.html" class="sub-nav-link">Home Fashion 05</a></li>
                                <li><a href="home-06.html" class="sub-nav-link">Home Fashion 06</a></li>
                                <li><a href="home-07.html" class="sub-nav-link">Home Fashion 07</a></li>
                                <li><a href="home-08.html" class="sub-nav-link">Home Fashion 08</a></li>
                                <li><a href="home-giftcard.html" class="sub-nav-link">Home Gift Card</a></li>
                                <li><a href="home-headphone.html" class="sub-nav-link">Home Headphone</a></li>
                                <li><a href="home-multi-brand.html" class="sub-nav-link">Home Multi Brand</a></li>
                                <li><a href="home-skincare.html" class="sub-nav-link">Home skincare</a></li>
                                <li><a href="home-furniture.html" class="sub-nav-link">Home Furniture</a></li>
                                <li><a href="home-furniture-02.html" class="sub-nav-link">Home Furniture 2</a></li>
                                <li><a href="home-skateboard.html" class="sub-nav-link">Home Skateboard</a></li>
                                <li><a href="home-stroller.html" class="sub-nav-link">Home Stroller</a></li>
                                <li><a href="home-decor.html" class="sub-nav-link">Home Decor</a></li>
                                <li><a href="home-electronic.html" class="sub-nav-link">Home Electronic</a></li>
                                <li><a href="home-setup-gear.html" class="sub-nav-link">Home Setup Gear</a></li>
                                <li><a href="home-dog-accessories.html" class="sub-nav-link">Home Dog Accessories</a></li>
                                <li><a href="home-kitchen-wear.html" class="sub-nav-link">Home Kitchen Wear</a></li>
                                <li><a href="home-phonecase.html" class="sub-nav-link">Home Phonecase</a></li>
                                <li><a href="home-paddle-boards.html" class="sub-nav-link">Home Paddle Boards</a></li>
                                <li><a href="home-glasses.html" class="sub-nav-link">Home Glasses</a></li>
                                <li><a href="home-pod-store.html" class="sub-nav-link">Home POD Store</a></li>
                                <li><a href="home-activewear.html" class="sub-nav-link">Home Activewear</a></li>
                                <li><a href="home-handbag.html" class="sub-nav-link">Home Handbag</a></li>
                                <li><a href="home-tee.html" class="sub-nav-link">Home Tee</a></li>
                                <li><a href="home-sock.html" class="sub-nav-link">Home Sock</a></li>
                                <li><a href="home-jewerly.html" class="sub-nav-link">Home Jewelry</a></li>
                                <li><a href="home-sneaker.html" class="sub-nav-link">Home Sneaker</a></li>
                                <li><a href="home-accessories.html" class="sub-nav-link">Home Accessories</a></li>
                                <li><a href="home-grocery.html" class="sub-nav-link">Home Grocery</a></li>
                                <li><a href="home-baby.html" class="sub-nav-link">Home Baby</a></li>
                                <li><a href="home-personalized-pod.html" class="sub-nav-link">Home Personalized Pod</a></li>
                                <li><a href="home-pickleball.html" class="sub-nav-link">Home Pickleball</a></li>
                                <li><a href="home-ceramic.html" class="sub-nav-link">Home Ceramic</a></li>
                                <li><a href="home-food.html" class="sub-nav-link">Home Food</a></li>
                                <li><a href="home-camp-and-hike.html" class="sub-nav-link">Home Camp And Hike</a></li>
                                <li><a href="home-cosmetic.html" class="sub-nav-link">Home Cosmetic</a></li>
                                <li><a href="home-plant.html" class="sub-nav-link">Home Plant</a></li>
                                <li><a href="home-swimwear.html" class="sub-nav-link">Home Swimwear</a></li>
                                <li><a href="home-electric-bike.html" class="sub-nav-link">Home Electric Bike</a></li>
                                <li><a href="home-footwear.html" class="sub-nav-link">Home Footwear</a></li>
                                <li><a href="home-book-store.html" class="sub-nav-link">Home Book Store</a></li>
                                <li><a href="home-gaming-accessories.html" class="sub-nav-link">Home Gaming Accessories</a></li>
                                <li><a href="home-parallax.html" class="sub-nav-link">Home Parallax</a></li>
                            </ul>
                        </div>

                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-two" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-two">
                            <span>Shop</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-two" class="collapse">
                            <ul class="sub-nav-menu" id="sub-menu-navigation">
                                <li><a href="#sub-shop-one" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-one">
                                        <span>Shop layouts</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-shop-one" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="shop-default.html" class="sub-nav-link">Default</a></li>
                                            <li><a href="shop-left-sidebar.html" class="sub-nav-link">Left sidebar</a></li>
                                            <li><a href="shop-right-sidebar.html" class="sub-nav-link">Right sidebar</a></li>
                                            <li><a href="shop-fullwidth.html" class="sub-nav-link">Fullwidth</a></li>
                                            <li><a href="shop-collection-sub.html" class="sub-nav-link">Sub collection</a></li>
                                            <li><a href="shop-collection-list.html" class="sub-nav-link">Collections list</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-shop-two" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-two">
                                        <span>Features</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-shop-two" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="shop-link.html" class="sub-nav-link">Pagination links</a></li>
                                            <li><a href="shop-loadmore.html" class="sub-nav-link">Pagination loadmore</a></li>
                                            <li><a href="shop-infinite-scrolling.html" class="sub-nav-link">Pagination infinite scrolling</a></li>
                                            <li><a href="shop-filter-sidebar.html" class="sub-nav-link">Filter sidebar</a></li>
                                            <li><a href="shop-filter-hidden.html" class="sub-nav-link">Filter hidden</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-shop-three" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-three">
                                        <span>Product styles</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-shop-three" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">

                                            <li><a href="product-style-01.html" class="sub-nav-link">Product style 01</a></li>
                                            <li><a href="product-style-02.html" class="sub-nav-link">Product style 02</a></li>
                                            <li><a href="product-style-03.html" class="sub-nav-link">Product style 03</a></li>
                                            <li><a href="product-style-04.html" class="sub-nav-link">Product style 04</a></li>
                                            <li><a href="product-style-05.html" class="sub-nav-link">Product style 05</a></li>
                                            <li><a href="product-style-06.html" class="sub-nav-link">Product style 06</a></li>
                                            <li><a href="product-style-07.html" class="sub-nav-link">Product style 07</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-three" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-three">
                            <span>Products</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-three" class="collapse">
                            <ul class="sub-nav-menu" id="sub-menu-navigation">
                                <li>
                                    <a href="#sub-product-one" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-one">
                                        <span>Product layouts</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-product-one" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="product-detail.html" class="sub-nav-link">Product default</a></li>
                                            <li><a href="product-grid-1.html" class="sub-nav-link">Product grid 1</a></li>
                                            <li><a href="product-grid-2.html" class="sub-nav-link">Product grid 2</a></li>
                                            <li><a href="product-stacked.html" class="sub-nav-link">Product stacked</a></li>
                                            <li><a href="product-right-thumbnails.html" class="sub-nav-link">Product right thumbnails</a></li>
                                            <li><a href="product-bottom-thumbnails.html" class="sub-nav-link">Product bottom thumbnails</a></li>
                                            <li><a href="product-drawer-sidebar.html" class="sub-nav-link">Product drawer sidebar</a></li>
                                            <li><a href="product-description-accordion.html" class="sub-nav-link">Product description accordion</a></li>
                                            <li><a href="product-description-list.html" class="sub-nav-link">Product description list</a></li>
                                            <li><a href="product-description-vertical.html" class="sub-nav-link">Product description vertical</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-product-two" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-two">
                                        <span>Product details</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-product-two" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="product-inner-zoom.html" class="sub-nav-link">Product inner zoom</a></li>
                                            <li><a href="product-zoom-magnifier.html" class="sub-nav-link">Product zoom magnifier</a></li>
                                            <li><a href="product-no-zoom.html" class="sub-nav-link">Product no zoom</a></li>
                                            <li><a href="product-photoswipe-popup.html" class="sub-nav-link">Product photoswipe popup</a></li>
                                            <li><a href="product-zoom-popup.html" class="sub-nav-link">Product external zoom and photoswipe popup</a></li>
                                            <li><a href="product-video.html" class="sub-nav-link">Product video</a></li>
                                            <li><a href="product-3d.html" class="sub-nav-link">Product 3D, AR models</a></li>
                                            <li><a href="product-options-customizer.html" class="sub-nav-link">Product options & customizer</a></li>
                                            <li><a href="product-advanced-types.html" class="sub-nav-link">Advanced product types</a></li>
                                            <li><a href="product-giftcard.html" class="sub-nav-link">Recipient information form for gift card products</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-product-three" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-three">
                                        <span>Product swatchs</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-product-three" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="product-color-swatch.html" class="sub-nav-link">Product color swatch</a></li>
                                            <li><a href="product-rectangle.html" class="sub-nav-link">Product rectangle</a></li>
                                            <li><a href="product-rectangle-color.html" class="sub-nav-link">Product rectangle color</a></li>
                                            <li><a href="product-swatch-image.html" class="sub-nav-link">Product swatch image</a></li>
                                            <li><a href="product-swatch-image-rounded.html" class="sub-nav-link">Product swatch image rounded</a></li>
                                            <li><a href="product-swatch-dropdown.html" class="sub-nav-link">Product swatch dropdown</a></li>
                                            <li><a href="product-swatch-dropdown-color.html" class="sub-nav-link">Product swatch dropdown color</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#sub-product-four" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-product-four">
                                        <span>Product features</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-product-four" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="product-frequently-bought-together.html" class="sub-nav-link">Frequently bought together</a></li>
                                            <li><a href="product-frequently-bought-together-2.html" class="sub-nav-link">Frequently bought together 2</a></li>
                                            <li><a href="product-upsell-features.html" class="sub-nav-link">Product upsell features</a></li>
                                            <li><a href="product-pre-orders.html" class="sub-nav-link">Product pre-orders</a></li>
                                            <li><a href="product-notification.html" class="sub-nav-link">Back in stock notification</a></li>
                                            <li><a href="product-pickup.html" class="sub-nav-link">Product pickup</a></li>
                                            <li><a href="product-images-grouped.html" class="sub-nav-link">Variant images grouped</a></li>
                                            <li><a href="product-complimentary.html" class="sub-nav-link">Complimentary products</a></li>
                                            <li><a href="product-quick-order-list.html" class="sub-nav-link line-clamp">Quick order list<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                            <li><a href="product-detail-volume-discount.html" class="sub-nav-link line-clamp">Volume Discount<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                            <li><a href="product-detail-volume-discount-grid.html" class="sub-nav-link line-clamp">Volume Discount Grid<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                            <li><a href="product-detail-buyx-gety.html" class="sub-nav-link line-clamp">Buy X Get Y<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-four" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                            <span>Pages</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-four" class="collapse">
                            <ul class="sub-nav-menu" id="sub-menu-navigation">
                                <li><a href="about-us.html" class="sub-nav-link">About us</a></li>
                                <li><a href="brands.html" class="sub-nav-link line-clamp">Brands<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                <li><a href="brands-v2.html" class="sub-nav-link">Brands V2</a></li>
                                <li><a href="contact-1.html" class="sub-nav-link">Contact 1</a></li>
                                <li><a href="contact-2.html" class="sub-nav-link">Contact 2</a></li>
                                <li><a href="faq-1.html" class="sub-nav-link">FAQ 01</a></li>
                                <li><a href="faq-2.html" class="sub-nav-link">FAQ 02</a></li>
                                <li><a href="our-store.html" class="sub-nav-link">Our store</a></li>
                                <li><a href="store-locations.html" class="sub-nav-link">Store locator</a></li>
                                <li><a href="timeline.html" class="sub-nav-link line-clamp">Timeline<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                <li><a href="view-cart.html" class="sub-nav-link line-clamp">View cart</a></li>
                                <li><a href="checkout.html" class="sub-nav-link line-clamp">Check out</a></li>
                                <li><a href="payment-confirmation.html" class="sub-nav-link line-clamp">Payment Confirmation</a></li>
                                <li><a href="payment-failure.html" class="sub-nav-link line-clamp">Payment Failure</a></li>
                                <li><a href="#sub-account" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-account">
                                    <span>My Account</span>
                                    <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="sub-account" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li><a href="my-account.html" class="sub-nav-link">My account</a></li>
                                            <li><a href="my-account-orders.html" class="sub-nav-link">My order</a></li>
                                            <li><a href="my-account-orders-details.html" class="sub-nav-link">My order details</a></li>
                                            <li><a href="my-account-address.html" class="sub-nav-link">My address</a></li>
                                            <li><a href="my-account-edit.html" class="sub-nav-link">My account details</a></li>
                                            <li><a href="my-account-wishlist.html" class="sub-nav-link">My wishlist</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="invoice.html" class="sub-nav-link line-clamp">Invoice</a></li>
                                <li><a href="404.html" class="sub-nav-link line-clamp">404</a></li>
                            </ul>
                        </div>

                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-five" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-five">
                            <span>Blog</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-five" class="collapse">
                            <ul class="sub-nav-menu" >
                                <li><a href="blog-grid.html" class="sub-nav-link">Grid layout</a></li>
                                <li><a href="blog-sidebar-left.html" class="sub-nav-link">Left sidebar</a></li>
                                <li><a href="blog-sidebar-right.html" class="sub-nav-link">Right sidebar</a></li>
                                <li><a href="blog-list.html" class="sub-nav-link">Blog list</a></li>
                                <li><a href="blog-detail.html" class="sub-nav-link">Single Post</a></li>
                            </ul>
                        </div>

                    </li>
                    <li class="nav-mb-item">
                        <a href="https://themeforest.net/item/ecomus-ultimate-html5-template/53417990?s_rank=3" class="mb-menu-link">Buy now</a>
                    </li>
                </ul>
                <div class="mb-other-content">
                    <div class="d-flex group-icon">
                        <a href="wishlist.html" class="site-nav-icon"><i class="icon icon-heart"></i>Wishlist</a>
                        <a href="home-search.html" class="site-nav-icon"><i class="icon icon-search"></i>Search</a>
                    </div>
                    <div class="mb-notice">
                        <a href="contact-1.html" class="text-need">Need help ?</a>
                    </div>
                    <ul class="mb-info">
                        <li>Address: 1234 Fashion Street, Suite 567, <br> New York, NY 10001</li>
                        <li>Email: <b>info@fashionshop.com</b></li>
                        <li>Phone: <b>(212) 555-1234</b></li>
                    </ul>
                </div>
            </div>
            <div class="mb-bottom">
                <a href="login.html" class="site-nav-icon"><i class="icon icon-account"></i>Login</a>
                <div class="bottom-bar-language">
                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option data-thumbnail="{{asset('front_assets')}}/images/country/fr.svg">EUR <span>€ | France</span></option>
                            <option data-thumbnail="{{asset('front_assets')}}/images/country/de.svg">EUR <span>€ | Germany</span></option>
                            <option selected data-thumbnail="{{asset('front_assets')}}/images/country/us.svg">USD <span>$ | United States</span></option>
                            <option data-thumbnail="{{asset('front_assets')}}/images/country/vn.svg">VND <span>₫ | Vietnam</span></option>
                        </select>
                    </div>
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>English</option>
                            <option>العربية</option>
                            <option>简体中文</option>
                            <option>اردو</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /mobile menu -->

    <!-- Filter -->
    <div class="offcanvas offcanvas-start canvas-filter" id="filterShop">
        <div class="canvas-wrapper">
            <header class="canvas-header">
                <div class="filter-icon">
                    <span class="icon icon-filter"></span>
                    <span>Filter</span>
                </div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </header>
            <div class="canvas-body">
                <div class="widget-facet wd-categories">
                    <div class="facet-title" data-bs-target="#categories" data-bs-toggle="collapse" aria-expanded="true" aria-controls="categories">
                        <span>Product categories</span>
                        <span class="icon icon-arrow-up"></span>
                    </div>
                    <div id="categories" class="collapse show">
                        <ul class="list-categoris current-scrollbar mb_36">
                            <li class="cate-item current"><a href="shop-default.html"><span>Fashion</span></a></li>
                            <li class="cate-item"><a href="shop-default.html"><span>Men</span></a></li>
                            <li class="cate-item"><a href="shop-default.html"><span>Women</span></a></li>
                            <li class="cate-item"><a href="shop-default.html"><span>Denim</span></a></li>
                            <li class="cate-item"><a href="shop-default.html"><span>Dress</span></a></li>
                        </ul>
                    </div>
                </div>
                <form action="#" id="facet-filter-form" class="facet-filter-form">
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#availability" data-bs-toggle="collapse" aria-expanded="true" aria-controls="availability">
                            <span>Availability</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="availability" class="collapse show">
                            <ul class="tf-filter-group current-scrollbar mb_36">
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="availability" class="tf-check" id="inStock">
                                    <label for="inStock" class="label"><span>In stock</span>&nbsp;<span>(14)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="availability" class="tf-check" id="outStock">
                                    <label for="outStock" class="label"><span>Out of stock</span>&nbsp;<span>(2)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#price" data-bs-toggle="collapse" aria-expanded="true" aria-controls="price">
                            <span>Price</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="price" class="collapse show">
                            <div class="widget-price filter-price">
                                <div class="price-val-range" id="price-value-range" data-min="0" data-max="500"></div>
                                <div class="box-title-price">
                                    <span class="title-price">Price :</span>
                                    <div class="caption-price">
                                        <div class="price-val" id="price-min-value" data-currency="$"></div>
                                        <span>-</span>
                                        <div class="price-val" id="price-max-value" data-currency="$"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#brand" data-bs-toggle="collapse" aria-expanded="true" aria-controls="brand">
                            <span>Brand</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="brand" class="collapse show">
                            <ul class="tf-filter-group current-scrollbar mb_36">
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="brand" class="tf-check" id="Ecomus">
                                    <label for="Ecomus" class="label"><span>Ecomus</span>&nbsp;<span>(8)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="brand" class="tf-check" id="M&H">
                                    <label for="M&H" class="label"><span>M&H</span>&nbsp;<span>(8)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#color" data-bs-toggle="collapse" aria-expanded="true" aria-controls="color">
                            <span>Color</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="color" class="collapse show">
                            <ul class="tf-filter-group filter-color current-scrollbar mb_36">
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_beige" id="Beige" value="Beige">
                                    <label for="Beige" class="label"><span>Beige</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark" id="Black" value="Black">
                                    <label for="Black" class="label"><span>Black</span>&nbsp;<span>(18)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_blue-2" id="Blue" value="Blue">
                                    <label for="Blue" class="label"><span>Blue</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_brown" id="Brown" value="Brown">
                                    <label for="Brown" class="label"><span>Brown</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_cream" id="Cream" value="Cream">
                                    <label for="Cream" class="label"><span>Cream</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark-beige" id="Dark Beige" value="Dark Beige">
                                    <label for="Dark Beige" class="label"><span>Dark Beige</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark-blue" id="Dark Blue" value="Dark Blue">
                                    <label for="Dark Blue" class="label"><span>Dark Blue</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark-green" id="Dark Green" value="Dark Green">
                                    <label for="Dark Green" class="label"><span>Dark Green</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark-grey" id="Dark Grey" value="Dark Grey">
                                    <label for="Dark Grey" class="label"><span>Dark Grey</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_grey" id="Grey" value="Grey">
                                    <label for="Grey" class="label"><span>Grey</span>&nbsp;<span>(2)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-blue" id="Light Blue" value="Light Blue">
                                    <label for="Light Blue" class="label"><span>Light Blue</span>&nbsp;<span>(5)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-green" id="Light Green" value="Light Green">
                                    <label for="Light Green" class="label"><span>Light Green</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-grey" id="Light Grey" value="Light Grey">
                                    <label for="Light Grey" class="label"><span>Light Grey</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-pink" id="Light Pink" value="Light Pink">
                                    <label for="Light Pink" class="label"><span>Light Pink</span>&nbsp;<span>(2)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_purple" id="Light Purple" value="Light Purple">
                                    <label for="Light Purple" class="label"><span>Light Purple</span>&nbsp;<span>(2)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-yellow" id="Light Yellow" value="Light Yellow">
                                    <label for="Light Yellow" class="label"><span>Light Yellow</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_orange" id="Orange" value="Orange">
                                    <label for="Orange" class="label"><span>Orange</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_pink" id="Pink" value="Pink">
                                    <label for="Pink" class="label"><span>Pink</span>&nbsp;<span>(2)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_taupe" id="Taupe" value="Taupe">
                                    <label for="Taupe" class="label"><span>Taupe</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_white" id="White" value="White">
                                    <label for="White" class="label"><span>White</span>&nbsp;<span>(14)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_yellow" id="Yellow" value="Yellow">
                                    <label for="Yellow" class="label"><span>Yellow</span>&nbsp;<span>(1)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#size" data-bs-toggle="collapse" aria-expanded="true" aria-controls="size">
                            <span>Size</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="size" class="collapse show">
                            <ul class="tf-filter-group current-scrollbar">
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="size" class="tf-check tf-check-size" value="S" id="S">
                                    <label for="S" class="label"><span>S</span>&nbsp;<span>(7)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="size" class="tf-check tf-check-size" value="M" id="M">
                                    <label for="M" class="label"><span>M</span>&nbsp;<span>(8)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="size" class="tf-check tf-check-size" value="L" id="L">
                                    <label for="L" class="label"><span>L</span>&nbsp;<span>(8)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="size" class="tf-check tf-check-size" value="XL" id="XL">
                                    <label for="XL" class="label"><span>XL</span>&nbsp;<span>(6)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Filter -->

    <!-- canvasSearch -->
    <div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
        <div class="canvas-wrapper">
            <header class="tf-search-head">
                <div class="title fw-5">
                    Search our site
                    <div class="close">
                        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                    </div>
                </div>
                <div class="tf-search-sticky">
                    <form class="tf-mini-search-frm">
                        <fieldset class="text">
                            <input type="text" placeholder="Search" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                        </fieldset>
                        <button class="" type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </header>
            <div class="canvas-body p-0">
                <div class="tf-search-content">
                    <div class="tf-cart-hide-has-results">
                        <div class="tf-col-quicklink">
                            <div class="tf-search-content-title fw-5">Quick link</div>
                            <ul class="tf-quicklink-list">
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Fashion</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Men</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Women</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Accessories</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tf-col-content">
                            <div class="tf-search-content-title fw-5">Need some inspiration?</div>
                            <div class="tf-search-hidden-inner">
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="{{asset('front_assets')}}/images/products/white-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Cotton jersey top</a>
                                        <div class="tf-product-info-price">
                                            <div class="compare-at-price">$10.00</div>
                                            <div class="price-on-sale fw-6">$8.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="{{asset('front_assets')}}/images/products/white-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Mini crossbody bag</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="{{asset('front_assets')}}/images/products/white-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Oversized Printed T-shirt</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /canvasSearch -->

    <!-- toolbarShopmb -->
    <div class="offcanvas offcanvas-start canvas-mb toolbar-shop-mobile" id="toolbarShopmb">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="{{asset('front_assets')}}/images/shop/cate/cate1.jpg" alt="">
                            </div>
                            <span>Accessories</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="{{asset('front_assets')}}/images/shop/cate/cate2.jpg" alt="">
                            </div>
                            <span>Dog</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="{{asset('front_assets')}}/images/shop/cate/cate3.jpg" alt="">
                            </div>
                            <span>Grocery</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="{{asset('front_assets')}}/images/shop/cate/cate4.png" alt="">
                            </div>
                            <span>Handbag</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#cate-menu-one" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-one">
                            <div class="image">
                                <img src="{{asset('front_assets')}}/images/shop/cate/cate5.jpg" alt="">
                            </div>
                            <span>Fashion</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="cate-menu-one" class="collapse list-cate">
                            <ul class="sub-nav-menu" id="cate-menu-navigation">
                                <li>
                                    <a href="#cate-shop-one" class="tf-category-link has-children sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-shop-one">
                                        <div class="image">
                                            <img src="{{asset('front_assets')}}/images/shop/cate/cate6.jpg" alt="">
                                        </div>
                                        <span>Mens</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="cate-shop-one" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li>
                                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                    <div class="image">
                                                        <img src="{{asset('front_assets')}}/images/shop/cate/cate1.jpg" alt="">
                                                    </div>
                                                    <span>Accessories</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                    <div class="image">
                                                        <img src="{{asset('front_assets')}}/images/shop/cate/cate8.jpg" alt="">
                                                    </div>
                                                    <span>Shoes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#cate-shop-two" class="tf-category-link has-children sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-shop-two">
                                        <div class="image">
                                            <img src="{{asset('front_assets')}}/images/shop/cate/cate9.jpg" alt="">
                                        </div>
                                        <span>Womens</span>
                                        <span class="btn-open-sub"></span>
                                    </a>
                                    <div id="cate-shop-two" class="collapse">
                                        <ul class="sub-nav-menu sub-menu-level-2">
                                            <li>
                                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                    <div class="image">
                                                        <img src="{{asset('front_assets')}}/images/shop/cate/cate4.png" alt="">
                                                    </div>
                                                    <span>Handbag</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                                    <div class="image">
                                                        <img src="{{asset('front_assets')}}/images/shop/cate/cate7.jpg" alt="">
                                                    </div>
                                                    <span>Tee</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#cate-menu-two" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-two">
                            <div class="image">
                                <img src="{{asset('front_assets')}}/images/shop/cate/cate6.jpg" alt="">
                            </div>
                            <span>Men</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="cate-menu-two" class="collapse list-cate">
                            <ul class="sub-nav-menu" id="cate-menu-navigation1">
                                <li>
                                    <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                        <div class="image">
                                            <img src="{{asset('front_assets')}}/images/shop/cate/cate1.jpg" alt="">
                                        </div>
                                        <span>Accessories</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                        <div class="image">
                                            <img src="{{asset('front_assets')}}/images/shop/cate/cate8.jpg" alt="">
                                        </div>
                                        <span>Shoes</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="{{asset('front_assets')}}/images/shop/cate/cate7.jpg" alt="">
                            </div>
                            <span>Tee</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="shop-default.html" class="tf-category-link mb-menu-link">
                            <div class="image">
                                <img src="{{asset('front_assets')}}/images/shop/cate/cate8.jpg" alt="">
                            </div>
                            <span>Shoes</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#cate-menu-three" class="tf-category-link has-children collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="cate-menu-three">
                            <div class="image">
                                <img src="{{asset('front_assets')}}/images/shop/cate/cate9.jpg" alt="">
                            </div>
                            <span>Women</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="cate-menu-three" class="collapse list-cate">
                            <ul class="sub-nav-menu" id="cate-menu-navigation2">
                                <li>
                                    <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                        <div class="image">
                                            <img src="{{asset('front_assets')}}/images/shop/cate/cate4.png" alt="">
                                        </div>
                                        <span>Handbag</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-default.html" class="tf-category-link sub-nav-link">
                                        <div class="image">
                                            <img src="{{asset('front_assets')}}/images/shop/cate/cate7.jpg" alt="">
                                        </div>
                                        <span>Tee</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mb-bottom">
                <a href="shop-default.html" class="tf-btn fw-5 btn-line">View all collection<i class="icon icon-arrow1-top-left"></i></a>
            </div>
        </div>
    </div>
    <!-- /toolbarShopmb -->

    <!-- modal login -->
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Log in</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="" action="https://themesflat.co/html/ecomus/my-account.html" accept-charset="utf-8">
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="password"  name="">
                            <label class="tf-field-label" for="">Password *</label>
                        </div>
                        <div>
                            <a href="#forgotPassword" data-bs-toggle="modal" class="btn-link link">Forgot your password?</a>
                        </div>
                        <div class="bottom">
                            <div class="w-100">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Log in</span></button>
                            </div>
                            <div class="w-100">
                                <a href="#register" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                    New customer? Create your account
                                    <i class="icon icon-arrow1-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="forgotPassword">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Reset your password</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="">
                        <div>
                            <p>Sign up for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails</p>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div>
                            <a href="#login" data-bs-toggle="modal" class="btn-link link">Cancel</a>
                        </div>
                        <div class="bottom">
                            <div class="w-100">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Reset password</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modalCentered fade form-sign-in modal-part-content" id="register">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Register</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-login-form">
                    <form class="">
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="text"  name="">
                            <label class="tf-field-label" for="">First name</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="text"  name="">
                            <label class="tf-field-label" for="">Last name</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="email"  name="">
                            <label class="tf-field-label" for="">Email *</label>
                        </div>
                        <div class="tf-field style-1">
                            <input class="tf-field-input tf-input" placeholder=" " type="password"  name="">
                            <label class="tf-field-label" for="">Password *</label>
                        </div>
                        <div class="bottom">
                            <div class="w-100">
                                <a href="register.html" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span>Register</span></a>
                            </div>
                            <div class="w-100">
                                <a href="#login" data-bs-toggle="modal" class="btn-link fw-6 w-100 link">
                                    Already have an account? Log in here
                                    <i class="icon icon-arrow1-top-left"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal login -->

    <!-- shoppingCart -->
    @include('layout.frontend.shoppingcart')
    <!-- /shoppingCart -->

    <!-- modal compare -->


    <!-- Javascript -->
    <script type="text/javascript" src="{{asset('front_assets')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/carousel.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/lazysize.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/count-down.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/wow.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/nouislider.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/shop.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/multiple-modal.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/main.js"></script>

    <script src="{{asset('front_assets')}}/js/sibforms.js" defer></script>

    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>
</body>


<!-- Mirrored from themesflat.co/html/ecomus/product-style-07.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 04:03:34 GMT -->
</html>
