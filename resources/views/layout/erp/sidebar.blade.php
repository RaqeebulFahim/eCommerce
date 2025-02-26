<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="{{ url('/admin/dashboard') }}" class="logo">
            <span>
                <img src="{{ asset('assets') }}/images/raqeebul_fahim.png" alt="logo-small" class="logo-sm">
            </span>
            <span class="">
                <img src="{{ asset('assets') }}/images/logo-light.png" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ asset('assets') }}/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end brand-->
    <!--start startbar-menu-->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <!-- Navigation -->
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label pt-0 mt-0">
                        <!-- <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small> -->
                        <span>Main Menu</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>Dashboards</span>
                        </a>
                        <div class="collapse " id="sidebarDashboards">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/front') }}">Front</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ecommerce-index.html">Ecommerce</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end startbarDashboards-->
                    </li><!--end nav-item-->


                    <li class="nav-item">
                        <a class="nav-link" href="#sideCustomers" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sideCustomers">
                            {{-- <i class="iconoir-home-simple menu-icon"></i> --}}
                            <i class="fa-solid fa-users menu-icon"></i>
                            <span>Customers and Suppliers Management</span>
                        </a>
                        <div class="collapse " id="sideCustomers">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/customers') }}">Customers</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/suppliers') }}">Suppliers</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sideCustomers-->
                    </li><!--end nav-item-->


                    {{-- 02. raqeebul's Product Mangement  --}}

                    <li class="nav-item">
                        <a class="nav-link" href="#product" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="product">
                            {{-- <i class="fa-solid fa-warehouse menu-icon">   </i> --}}
                            <i class="fa-solid fa-store menu-icon"></i>
                            <span> Product Management</span>
                        </a>
                        <div class="collapse " id="product">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/products') }}">Products</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/categorys') }}">Categories</a>
                                </li><!--end nav-item-->

                                <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/dashboard') }}">Product Variants</a>
                        </li>end nav-item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/stocks') }}">Stocks</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div>
                    </li><!--end nav-item-->


                    {{-- 03. raqeebul's Order and payment Management  --}}

                    <li class="nav-item">
                        <a class="nav-link" href="#payments" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="payments">
                            <i class="fa-solid fa-credit-card menu-icon"></i>
                            <span> Order and Payments </span>
                        </a>
                        <div class="collapse " id="payments">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/orders') }}">Orders</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/orderdetails') }}">Order Details</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/payments') }}">Payments</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/shippings') }}">Shipping</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div>
                    </li><!--end nav-item-->



                    {{-- 04. raqeebul's Marketing and CUstomer Engagement  --}}

                    <li class="nav-item">
                        <a class="nav-link" href="#marketing" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="marketing">
                            {{-- <i class="iconoir-home-simple menu-icon"></i> --}}
                            <i class="fa-regular fa-handshake menu-icon"> </i>
                            <span>Marketing and CUstomer Engagement</span>
                        </a>
                        <div class="collapse " id="marketing">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('promotions')}}">Promotions</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('reviews')}}">Reviews</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('wishlists')}}">Wishlist </a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div>
                    </li><!--end nav-item-->


                    {{-- 04. raqeebul's Notifications and Settings  --}}

                    <li class="nav-item">
                        <a class="nav-link" href="#notifications" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="notifications">
                            {{-- <i class="iconoir-home-simple menu-icon"></i> --}}
                            <i class="fa-regular fa-envelope menu-icon"></i>
                            <span>Notifications and Settings</span>
                        </a>
                        <div class="collapse " id="notifications">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Notifications</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">admin Setings</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div>
                    </li><!--end nav-item-->




                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuthentication">
                            <i class="iconoir-fingerprint-lock-circle menu-icon"></i>
                            <span>Authentication</span>
                        </a>
                        <div class="collapse " id="sidebarAuthentication">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-login.html">Log in</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-register.html">Register</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-maintenance.html">Maintenance</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-404.html">Error 404</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-500.html">Error 500</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end startbarAuthentication-->
                    </li><!--end nav-item-->

                </ul><!--end navbar-nav--->

            </div>
        </div><!--end startbar-collapse-->
    </div><!--end startbar-menu-->
</div><!--end startbar-->
<div class="startbar-overlay d-print-none"></div>
