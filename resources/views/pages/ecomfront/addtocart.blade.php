    {{-- @@include('pages.ecomfront.addtocart') -- > this line added  this page to ecom-shop.blade.php at line 303 --}}

    <div class="wrapper-control-shop tf-shop-content">
        <div class="meta-filter-shop">
            <div id="product-count-grid" class="count-text"></div>
            <div id="product-count-list" class="count-text"></div>
            <div id="applied-filters"></div>
            <button id="remove-all" class="remove-all-filters" style="display: none;">Remove All <i
                    class="icon icon-close"></i></button>
        </div>
        {{-- sigle product with details div will be added here from deleted part ecom-shopping.blade.php  --}}
        <div class="tf-grid-layout wrapper-shop tf-col-3" id="gridLayout">

            @foreach ($products as $product)
                {{-- <x-products.image :product="$product" /> --}}
                <x-products.product :product="$product" />
            @endforeach

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


    {{-- here is add to cart --}}

    <!-- modal quick_add -->
    <div class="modal fade modalDemo" id="quick_add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>


                <div class="wrap">
                    <div class="tf-product-info-item">
                        <div class="image">
                            <img class="modal-image" alt="product-image">
                        </div>

                        <div class="content">
                            <a href="product-detail.html" class="modal_name">Product Name</a>
                            <div class="tf-product-info-price">
                                <!-- <div class="price-on-sale">$8.00</div>
                            <div class="compare-at-price">$10.00</div>
                            <div class="badges-on-sale"><span>20</span>% OFF</div> -->
                                <span>$</span>
                                <div class="price_model">$22</div>
                            </div>
                        </div>
                    </div>


                    <div class="tf-product-info-variant-picker mb_15">
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                Color: <span class="color_selected fw-6 variant-picker-label-value color ">Orange</span>
                            </div>
                            <div class="variant-picker-values">

                                @forelse ($color as $color)
                                    <input id="values-orange" type="radio" name="color" checked>
                                    <label class="hover-tooltip radius-60" for="values-{{ strtolower($color->name) }}"
                                        data-value="{{ $color->name }}">
                                        <span class="btn-checkbox bg-color-{{ strtolower($color->name) }}"></span>
                                        <span class="tooltip">{{ $color->name }}</span>
                                    </label>
                                @empty
                                @endforelse


                                {{-- <input id="values-black" type="radio" name="color">
                           <label class=" hover-tooltip radius-60" for="values-black" data-value="Black">
                               <span class="btn-checkbox bg-color-black"></span>
                               <span class="tooltip">Black</span>
                           </label>
                           <input id="values-white" type="radio" name="color">
                           <label class="hover-tooltip radius-60" for="values-white" data-value="White">
                               <span class="btn-checkbox bg-color-white"></span>
                               <span class="tooltip">White</span>
                           </label> --}}
                            </div>
                        </div>
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                Size: <span class="size_selected fw-6 variant-picker-label-value size">S</span>
                            </div>
                            <div class="variant-picker-values">

                                @forelse ($size as $size)
                                    <input type="radio" name="size" id="values-{{ strtolower($size->name) }}"
                                        @if ($size->id == 1) checked @endif>
                                    <label class="style-text" for="values-{{ strtolower($size->name) }}"
                                        data-value="{{ $size->name }}">
                                        <p>{{ $size->name }}</p>
                                    </label>
                                @empty
                                @endforelse




                                {{-- <input type="radio" name="size" id="values-m">
                            <label class="style-text" for="values-m" data-value="M">
                                <p>M</p>
                            </label>
                            <input type="radio" name="size" id="values-l">
                            <label class="style-text" for="values-l" data-value="L">
                                <p>L</p>
                            </label>
                            <input type="radio" name="size" id="values-xl">
                            <label class="style-text" for="values-xl" data-value="XL">
                                <p>XL</p>
                            </label> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-quantity mb_15">
                        <div class="quantity-title fw-6">Quantity</div>
                        <div class="wg-quantity">
                            <span class="btn-quantity minus-btn-qty">-</span>
                            <input class="qty final_qty_input" type="text" name="number" value="1">
                            <span class="btn-quantity plus-btn-qty">+</span>
                        </div>
                    </div>
                    {{-- btn-add-to-cart --}}
                    <div class="tf-product-info-buy-button">
                        <form class="">
                            <a data-bs-dismiss="modal" href="javascript:void(0);"
                                class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn ecomaddcart  ">
                                <span>Add
                                    to cart -&nbsp;</span>$<span class="tf-qty-price price price_model">$18.00</span>

                            </a>
                            <div class="tf-product-btn-wishlist btn-icon-action">
                                <i class="icon-heart"></i>
                                <i class="icon-delete"></i>
                            </div>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                class="tf-product-btn-wishlist box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="icon icon-check"></span>
                            </a>
                            <div class="w-100">
                                <a href="#" class="btns-full">Buy with <img
                                        src="{{ asset('front_assets') }}/images/payments/paypal.png" alt=""></a>
                                <a href="#" class="payment-more-option">More payment options</a>
                            </div>
                            <div class="product_details" style="display:none"></div>


                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_add -->



    @section('script')
        {{-- <script src="{{ asset('assets/js/cart_.js') }}"></script> --}}

        <script>
            $(function() {

                const cart = new Cart('ecommerce');

                $(document).on('click', '.ecomaddcart', function() {
                    // alert()
                    let product = JSON.parse($('.product_details').text());

                    let color = $(".color_selected").text()
                    let size = $(".size_selected").text()
                    let qty = parseInt($(".final_qty_input").val())

                    let subtotal = qty * parseInt(product.price)

                    let item = {
                        "item_id": product.id,
                        "name": product.name,
                        "qty": qty,
                        "price": product.price,
                        "subtotal": subtotal,
                        "discount": 0,
                        "color": color,
                        "size": size,
                        "image": product.images[0].image_name,


                    };
                    console.log(item);
                     cart.save(item);
                      cart_length();
                    $(".final_qty_input").val(1)
                });

                $(document).on('click', ".plus-btn-qty", function() {
                    let input = $(this).prev(".final_qty_input"); // Get the input before the plus button
                    let currentVal = parseInt(input.val());
                    if (!isNaN(currentVal)) {
                        input.val(currentVal + 1); // Increase value by 1
                    }
                })
                $(document).on('click', ".minus-btn-qty", function() {
                    let input = $(this).next(".final_qty_input"); // Get the input after the minus button
                    let currentVal = parseInt(input.val());
                    if (!isNaN(currentVal) && currentVal > 1) {
                        input.val(currentVal - 1); // Decrease value by 1 (but not below 1)
                    }
                })



                $(document).on('click', '.box-icon', function() {
                    let product = JSON.parse($(this).attr('data-product'));
                    console.log(product);
                    $('.modal-image').attr('src',
                        `{{ asset('front_assets') }}/images/products/${product.images[0].image_name}`);
                    $('.modal_name').text(product.name);
                    $('.price_model').text(product.price);
                    // $('.size').text(product.size_id);
                    // $('.color').text(product.color_id);
                    $('.description').text(product.description);
                    $('.product_details').text(JSON.stringify(product));

                });




                function cart_length() {
                    let items = cart.getCart()?.length ?? 0;
                    $('.cartlength').text(items);
                }
                cart_length()


            })
        </script>
    @endsection
