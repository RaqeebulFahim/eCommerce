
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/ecomus/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 04:04:42 GMT -->
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
   <link rel="stylesheet" href="{{asset('front_assets')}}/{{asset('front_assets')}}/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="{{asset('front_assets')}}/css/animate.css">
   <link rel="stylesheet" href="{{asset('front_assets')}}//sibforms.com/forms/end-form/build/sib-styles.css">
   <link rel="stylesheet"type="text/css" href="{{asset('front_assets')}}/css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('front_assets')}}/images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('front_assets')}}/images/logo/favicon.png">

	<style>
		@media print {
    button{
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

<body class="wrapper-invoice"  >
    <section class="invoice-section" id="invoice">
        <div class="cus-container2" >
            <div class="top">
                <a href="#" class="tf-btn btn-fill animate-hover-btn" onclick="printInvoice()">
                    Print this invoice
                </a> <br>
				<button onclick="window.print()">Print</button> <br>
				{{-- <button onclick="printInvoice()">Print Invoice</button> <br> --}}

            </div>
            <div class="box-invoice" >
                <div class="header">
                    <div class="wrap-top">
                        <div class="box-left">
                            <a href="index.html">
                                <img src="{{asset('front_assets')}}/images/logo/logo.svg" alt="logo" class="logo">
                            </a>
                        </div>
                        <div class="box-right">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="title">Invoice #</div>
                                <span class="code-num">0043128641</span>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-date">
                        <div class="box-left">
                            <label for="">Invoice date:</label>
                            <span class="date">03/10/2024</span>
                        </div>
                        <div class="box-right">
                            <label for="">Due date:</label>
                            <span class="date">03/10/2024</span>
                        </div>
                    </div>
                    <div class="wrap-info">
                        <div class="box-left">
                            <div class="title">Supplier</div>
                            <div class="sub">Jobio LLC</div>
                            <p class="desc">2301 Ravenswood Rd Madison,
                              <br>  WI 53711</p>
                        </div>
                        <div class="box-right">
                            <div class="title">Customer</div>
                            <div class="sub">John Doe</div>
                            <p class="desc">329 Queensberry Street, North Melbourne <br> VIC 3051, Australia.</p>
                        </div>
                    </div>
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
                            <tbody>
                                <tr class="content">
                                    <td>1 </td>
                                    <td>T-Shirt</td>
                                    <td>3</td>
                                    <td>$921.80</td>
                                    <td>$21.80</td>
                                    <td>$9243</td>
                                </tr>
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
									{{-- <td ></td> --}}
									<td colspan="2" class="discount" style="text-align: right">Total Discount Amount</td>
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
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="footer">
                    <ul class="box-contact">
                        <li>www.ecomus.com</li>
                        <li>invoice@ecomus.com</li>
                        <li>(123) 123-456</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

	{{-- <script>
			function printContent() {
		let content = document.getElementById('invoice').innerHTML;
		let printWindow = window.open('', '', 'width=800,height=600');
		printWindow.document.write('<html><head><title>Print Invoice</title></head><body>');
		printWindow.document.write(content);
		printWindow.document.write('</body></html>');
		printWindow.document.close();
		printWindow.print();
	}

	</script> --}}

	<script>
    function printInvoice() {
        let printContents = document.getElementById('invoice').innerHTML;
        let originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>




    <!-- Javascript -->
    <script type="text/javascript" src="{{asset('front_assets')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/carousel.js"></script>

    <script type="text/javascript" src="{{asset('front_assets')}}/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/lazysize.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/count-down.js"></script>
    <script type="text/javascript" src="{{asset('front_assets')}}/js/wow.min.js"></script>
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


<!-- Mirrored from themesflat.co/html/ecomus/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 04:04:42 GMT -->
</html>











{{--
@extends('layout.erp.app')
@section('title','Show Order')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('orders.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$order->id}}</td></tr>
		<tr><th>Customer Id</th><td>{{$order->customer_id}}</td></tr>
		<tr><th>Total Price</th><td>{{$order->total_price}}</td></tr>
		<tr><th>Order Status Id</th><td>{{$order->order_status_id}}</td></tr>
		<tr><th>Payment Status Id</th><td>{{$order->payment_status_id}}</td></tr>
		<tr><th>Created At</th><td>{{$order->created_at}}</td></tr>
		<tr><th>Updated At</th><td>{{$order->updated_at}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection --}}
