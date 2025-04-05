<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/ecomus/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 04:04:42 GMT -->

<head>
    <meta charset="utf-8">
    <title>Raqeebul Ecomus Invoice</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('front_assets') }}/fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('front_assets') }}/fonts/font-icons.css">
    <link rel="stylesheet" href="{{ asset('front_assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front_assets') }}/{{ asset('front_assets') }}/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('front_assets') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('front_assets') }}//sibforms.com/forms/end-form/build/sib-styles.css">
    <link rel="stylesheet"type="text/css" href="{{ asset('front_assets') }}/css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('front_assets') }}/images/logo/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('front_assets') }}/images/logo/favicon.ico">

    <style>
        @media print {
            button {
                display: none;
            }

            a {
                display: none;
            }

            body {
                font-size: 14px;
            }
        }
    </style>

</head>

<body class="wrapper-invoice">
    <section class="invoice-section" id="invoice">
        <div class="cus-container2">
            <div class="top">
                {{-- <a href="#" class="tf-btn btn-fill animate-hover-btn" onclick="printInvoice()">
                    Print this invoice
                </a> <br> --}}
                <button onclick="window.print()" class="tf-btn btn-fill animate-hover-btn">Print this invoice</button>
                <br>
                {{-- <button onclick="printInvoice()">Print Invoice</button> <br> --}}

            </div>
            <div class="box-invoice">
                <div class="header">
                    <div class="wrap-top">
                        <div class="box-left">
                            <a href="index.html">
                                <img src="{{ asset('front_assets') }}/images/logo/logo.svg" alt="logo"
                                    class="logo">
                            </a>
                        </div>
                        <div class="box-right">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="title">Invoice #</div>
                                <span class="code-num">
                                    <h5>{{ $order->id }} </h5>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-date">
                        <div class="box-left">
                            <label for="">Invoice date:</label>
                            <span class="date">{{ $order->created_at }}</span>
                        </div>
                        <div class="box-right">
                            <label for="">Due date:</label>
                            <span class="date">03/10/2024</span>
                        </div>
                    </div>
                    {{-- <div class="wrap-info">
                        <div class="box-left">
                            <div class="title">Supplier </div>
                            <div class="sub">Jobio LLC</div>
                            <p class="desc">2301 Ravenswood Rd Madison,
                                <br> WI 53711
                            </p>
                        </div>
                        <div class="box-right">
                            <div class="title">Customer</div>
                            <div class="sub">John Doe</div>
                            <p class="desc">329 Queensberry Street, North Melbourne <br> VIC 3051, Australia.</p>
                        </div>
                    </div> --}}

                    {{-- customer and supplier dynamic for invoice --}}
                    <div class="wrap-info">
                        <div class="box-left">
                            <div class="title">Supplier</div>
                            <div class="sub">{{ $order->supplier->name ?? 'N/A' }}</div>
                            <p class="desc">
                                {{ $order->supplier->address ?? 'N/A' }} <br>
                                {{ $order->supplier->email ?? 'N/A' }} <br>
                                {{ $order->supplier->phone ?? 'N/A' }}
                            </p>
                        </div>
                        <div class="box-right">
                            <div class="title">Customer</div>
                            <div class="sub">{{ $order->customer->name ?? 'N/A' }}</div>
                            <p class="desc">
                                {{ $order->customer->address ?? 'N/A' }} <br>
                                {{ $order->customer->email ?? 'N/A' }} <br>
                                {{ $order->customer->phone ?? 'N/A' }}
                            </p>
                        </div>
                    </div>
                    {{-- customer and supplier dynamic for invoice end --}}


                    <div class="wrap-table-invoice">
                        <table class="invoice-table">
                            <thead>
                                <tr class="title">
                                    <th>SL</th>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Total</th>

                                </tr>
                            </thead>

                             {{-- now orders item will dynamic here  --}}

                    <tbody class="append">
                        @php $total = 0; @endphp
                        @foreach ($order->orderDetails as $key => $detail)
                            @php
                                $subtotal = $detail->price * $detail->quantity;
                                $total += $subtotal;
                            @endphp
                            <tr class="content">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $detail->product->name ?? 'N/A' }}</td>
                                <td>{{ $detail->quantity }}</td>
                                <td>${{ number_format($detail->price, 2) }}</td>
                                <td>$00.00</td>
                                <td>${{ number_format($subtotal, 2) }}</td>
                            </tr>
                        @endforeach

                        <tr class="content">
                            <td colspan="4"></td>
                            <td class="total">Item Total</td>
                            <td class="total">${{ number_format($total, 2) }}</td>
                        </tr>

                        <tr class="content">
                            <td colspan="4"></td>
                            <td class="discount" style="text-align: right">Total Discount Amount</td>
                            <td class="total">$00.00</td>
                        </tr>

                        <tr class="content">
                            <td colspan="4"></td>
                            <td class="vat">VAT(15%)</td>
                            <td class="total">${{ number_format($total * 0.15, 2) }}</td>
                        </tr>

                        <tr class="content">
                            <td colspan="4"></td>
                            <td class="total">Total Price</td>
                            <td class="total">${{ number_format($total + ($total * 0.15), 2) }}</td>
                        </tr>
                    </tbody>



                    {{-- now orders item will dynamic here  --}}



                            {{-- <tbody class="append">
                                <tr class="content">
                                    <td>1 </td>
                                    <td>T-Shirt</td>
                                    <td>3</td>
                                    <td>$921.80</td>
                                    <td>$21.80</td>
                                    <td>$9243</td>
                                </tr>


                                @php $total = 0; @endphp
                                @foreach ($order->orderDetails as $key => $detail)
                                    @php
                                        $subtotal = $detail->price * $detail->quantity;
                                        $total += $subtotal;
                                    @endphp
                                    <tr class="content">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $detail->product->name ?? 'N/A' }}</td>
                                        <td>{{ $detail->quantity }}</td>
                                        <td>${{ number_format($detail->price, 2) }}</td>
                                        <td>$00.00</td>
                                        <td>${{ number_format($subtotal, 2) }}</td>
                                    </tr>
                                @endforeach




                                <tr class="content">
                                    <td>2 </td>
                                    <td>T-Shirt</td>
                                    <td>3</td>
                                    <td>$921.80</td>
                                    <td>$21.80</td>
                                    <td>$9243</td>
                                </tr>
                                <tr class="content">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="total"> Item Total</td>
                                    <td class="total">$9,750</td>
                                </tr>

                                <tr class="content">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2" class="discount" style="text-align: right">Total Discount Amount
                                    </td>
                                    <td class="total">$150</td>
                                </tr>

                                <tr class="content">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="vat">VAT(15%)</td>
                                    <td class="total">$150</td>
                                </tr>

                                <tr class="content">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="total"> Total Price</td>
                                    <td class="total">$9,750</td>
                                </tr>
                            </tbody> --}}
                        </table>
                    </div>

                </div>
                <div class="footer">
                    <ul class="box-contact">
                        <li>shop.raqeebulfahim.com</li>
                        <li>invoice@raqeebulfahim.com</li>
                        <li>+8801701005439</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>






    @section('script')
        <script src="{{ asset('assets/js/cart_.js') }}"></script>

        <script>
            $(function() {
                const invoicecart = new Cart('ecommerce');
                printCart()

                print_r($ecommerce);

                function printCart() {
                    let items = invoicecart.getCart()

                    if (items) {
                        let html = "";
                        let subtotal = 0;

                        items.forEach(elements => {
                            subtotal += parseInt(elements.subtotal);
                            console.log(elements);

                            html += `

                <tr class="content">
                            <td>1 </td>
                            <td>T-Shirt</td>
                            <td>3 ${elements.qty}</td>
                            <td>$921.80 ${elements.price}</td>
                            <td>$00.00</td>
                            <td>$${elements.subtotal}</td>
                        </tr>




             `
                            subtotal += elements.subtotal
                        });

                        $(".append").html(html)
                        $(".total").text(subtotal)
                    }
                }



                //     $(document).on('click', ".plus-btn" , function(){
                //         let id= $(this).attr('data-id');
                //         let qty =  parseInt( $(".final_qty").val())
                //         $(".final_qty").val(qty+1)
                //         let item = {
                //               "item_id": id,
                //               "qty":1,

                //         };
                //         invoicecart.save(item);
                //         printCart()


                // })


                // $(document).on('click', ".minus-btn" , function(){
                //     let id= $(this).attr('data-id');
                //     let qty =  parseInt( $(".final_qty").val())
                //         $(".final_qty").val(qty-1)

                //     let item = {
                //               "item_id": id,
                //               "qty":-1,

                //         };
                //         invoicecart.save(item);
                //         printCart()
                // })

                // $(document).on('click', ".remove_item" , function(){
                //     let id= $(this).attr('data-id');
                //     invoicecart.delItem(id);
                //         printCart()
                // })




            });
        </script>
    @endsection


















    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/carousel.js"></script>

    <script type="text/javascript" src="{{ asset('front_assets') }}/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/lazysize.min.js"></script>
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/count-down.js"></script>
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/wow.min.js"></script>
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/multiple-modal.js"></script>
    <script type="text/javascript" src="{{ asset('front_assets') }}/js/main.js"></script>

    <script src="{{ asset('front_assets') }}/js/sibforms.js" defer></script>

    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE =
            "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE =
            "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>
    <script>
        function printInvoice() {
            let printContents = document.getElementById('invoice').innerHTML;
            let originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        print_r($order);
    </script>






</body>


<!-- Mirrored from themesflat.co/html/ecomus/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 04:04:42 GMT -->

</html>
