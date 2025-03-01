
{{-- @props(['product'=> null]) --}}

<div class="card-product grid" data-availability="In stock" data-brand="Ecomus">
    <div class="card-product-wrapper">
        <a href="product-detail.html" class="product-img">
             @foreach ($product->images as $item)
             @php

                //  echo  $item;
             @endphp
             <img class="lazyload img-product" data-src="{{asset('front_assets')}}/images/products/{{$item->image_name}}" src="{{asset('front_assets')}}/images/products/{{$item->image_name	}}" alt="image-product">
             <img class="lazyload img-hover" data-src="{{asset('front_assets')}}/images/products/{{$item->image_name}}" src="{{asset('front_assets')}}/images/products/{{$item->image_name}}" alt="image-product">

             @endforeach
        </a>
        <div class="list-product-btn absolute-2">
            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                <span class="icon icon-bag"></span>
                <span class="tooltip">Quick Add</span>
            </a>
            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                <span class="icon icon-heart"></span>
                <span class="tooltip">Add to Wishlist</span>
                <span class="icon icon-delete"></span>
            </a>
            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                <span class="icon icon-compare"></span>
                <span class="tooltip">Add to Compare</span>
                <span class="icon icon-check"></span>
            </a>
            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                <span class="icon icon-view"></span>
                <span class="tooltip">Quick View</span>
            </a>
        </div>
    </div>
    <div class="card-product-info">
        <a href="product-detail.html" class="title link">{{$product->name}}</a>
        <span class="price current-price">${{ $product->offer_price ?? 200}}</span>
        <ul class="list-color-product">
            <li class="list-color-item color-swatch active">
                <span class="tooltip">Orange</span>
                <span class="swatch-value bg_orange-3"></span>
                <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/orange-1.jpg" src="{{asset('front_assets')}}/images/products/orange-2.jpg" alt="image-product">
            </li>
            <li class="list-color-item color-swatch">
                <span class="tooltip">Black</span>
                <span class="swatch-value bg_dark"></span>
                <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/black-1.jpg" src="{{asset('front_assets')}}/images/products/black-2.jpg" alt="image-product">
            </li>
            <li class="list-color-item color-swatch">
                <span class="tooltip">White</span>
                <span class="swatch-value bg_white"></span>
                <img class="lazyload" data-src="{{asset('front_assets')}}/images/products/white-1.jpg" src="{{asset('front_assets')}}/images/products/white-2.jpg" alt="image-product">
            </li>
        </ul>
    </div>
</div>
