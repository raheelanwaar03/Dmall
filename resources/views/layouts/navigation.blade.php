<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    <link href="{{ asset('assets/plugins/OwlCarousel/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="../../../../unpkg.com/boxicons%402.1.2/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <title>Dmall - eCommerce HTML Template</title>
</head>

<body>
    <div class="wrapper">
        <div class="header-wrapper">
            <div class="top-menu">
                <div class="container">
                    <nav class="navbar navbar-expand">
                        @if (auth()->user())
                            <div class="shiping-title d-none d-sm-flex">Welcome {{ auth()->user()->username }} to our
                                Shopingo store!</div>
                        @else
                            <div class="shiping-title d-none d-sm-flex">Welcome to our Shopingo store!</div>
                        @endif
                        <ul class="navbar-nav ms-auto d-none d-lg-flex justify-content-center align-items-center">
                            <li class="nav-item"><a class="nav-link" href="{{ route('welcome.aboutUs') }}">About</a>
                            </li>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('welcome.contactUs') }}">Contact</a>
                            </li>
                            @if (auth()->user())
                                <li class="nav-item">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button style=" border-radius:7px" type="submit"
                                            class="btn btn-sm btn-warning text-light">Logout</button>
                                    </form>
                                </li>
                            @endif

                        </ul>
                        <ul class="navbar-nav social-link ms-lg-2 ms-auto">
                            <li class="nav-item"> <a class="nav-link" href="https:://www.Facebook.com"><i
                                        class='bx bxl-facebook'></i></a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="javascript:;"><i
                                        class='bx bxl-twitter'></i></a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="javascript:;"><i
                                        class='bx bxl-linkedin'></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            @if(auth()->user())
            {
                <div class="header-content bg-warning">
                    <div class="container">
                        <div class="row align-items-center gx-4">
                            <div class="col-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="mobile-toggle-menu d-inline d-xl-none" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasNavbar">
                                        <i class="bx bx-menu"></i>
                                    </div>
                                    <div class="logo">
                                        <a href="{{ route('welcome') }}">
                                            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl order-4 order-xl-0">
                                <div class="input-group flex-nowrap pb-3 pb-xl-0">
                                    <input type="text" class="form-control w-100 border-dark border border-3"
                                        placeholder="Search for Products">
                                    <button class="btn btn-dark btn-ecomm border-3" type="button">Search</button>
                                </div>
                            </div>
                            <div class="col-auto d-none d-xl-flex">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="fs-1 text-content"><i class='bx bx-headphone'></i></div>
                                    <div class="">
                                        <p class="mb-0 text-content">CALL US NOW</p>
                                        <h5 class="mb-0">{{ env('APP_Num') }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto">
                                <div class="top-cart-icons">
                                    <nav class="navbar navbar-expand">
                                        <ul class="navbar-nav">
                                            <li class="nav-item"><a href="{{ route('login') }}"
                                                    class="nav-link cart-link"><i class='bx bx-user'></i></a>
                                            </li>
                                            <li class="nav-item"><a href="{{ route('login') }}"
                                                    class="nav-link cart-link"><i class='bx bx-heart'></i></a>
                                            </li>
                                            <li class="nav-item dropdown dropdown-large">
                                                <a href="{{ route('User.AddToCart') }}"
                                                    class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link">
                                                    <span class="alert-count">{{ cartProduct() }}</span>
                                                    <i class='bx bx-shopping-bag'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            }
            @else{
                <div class="header-content bg-warning">
                    <div class="container">
                        <div class="row align-items-center gx-4">
                            <div class="col-auto">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="mobile-toggle-menu d-inline d-xl-none" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasNavbar">
                                        <i class="bx bx-menu"></i>
                                    </div>
                                    <div class="logo">
                                        <a href="{{ route('welcome') }}">
                                            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl order-4 order-xl-0">
                                <div class="input-group flex-nowrap pb-3 pb-xl-0">
                                    <input type="text" class="form-control w-100 border-dark border border-3"
                                        placeholder="Search for Products">
                                    <button class="btn btn-dark btn-ecomm border-3" type="button">Search</button>
                                </div>
                            </div>
                            <div class="col-auto d-none d-xl-flex">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="fs-1 text-content"><i class='bx bx-headphone'></i></div>
                                    <div class="">
                                        <p class="mb-0 text-content">CALL US NOW</p>
                                        <h5 class="mb-0"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto ms-auto">
                                <div class="top-cart-icons">
                                    <nav class="navbar navbar-expand">
                                        <ul class="navbar-nav">
                                            <li class="nav-item"><a href="{{ route('login') }}"
                                                    class="nav-link cart-link"><i class='bx bx-user'></i></a>
                                            </li>
                                            <li class="nav-item"><a href="{{ route('login') }}"
                                                    class="nav-link cart-link"><i class='bx bx-heart'></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('User.AddToCart') }}"
                                                    class="nav-link position-relative cart-link">
                                                    <i class='bx bx-shopping-bag'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            }
            @endif
            <div class="primary-menu">
                <nav class="navbar navbar-expand-xl w-100 navbar-dark container mb-0 p-0">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                        <div class="offcanvas-header">
                            <div class="offcanvas-logo"><img src="{{ asset('assets/images/logo-icon.png') }}"
                                    width="100" alt="">
                            </div>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body primary-menu">
                            <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="tv-shows.html"
                                        data-bs-toggle="dropdown">
                                        Categories
                                    </a>
                                    <div class="dropdown-menu dropdown-large-menu">
                                        <div class="row">
                                            <div class="col-12 col-xl-4">
                                                <h6 class="large-menu-title">Fashion</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="javascript:;">Casual T-Shirts</a>
                                                    </li>
                                                    <li><a href="javascript:;">Formal Shirts</a>
                                                    </li>
                                                    <li><a href="javascript:;">Jackets</a>
                                                    </li>
                                                    <li><a href="javascript:;">Jeans</a>
                                                    </li>
                                                    <li><a href="javascript:;">Dresses</a>
                                                    </li>
                                                    <li><a href="javascript:;">Sneakers</a>
                                                    </li>
                                                    <li><a href="javascript:;">Belts</a>
                                                    </li>
                                                    <li><a href="javascript:;">Sports Shoes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <h6 class="large-menu-title">Electronics</h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="javascript:;">Mobiles</a>
                                                    </li>
                                                    <li><a href="javascript:;">Laptops</a>
                                                    </li>
                                                    <li><a href="javascript:;">Macbook</a>
                                                    </li>
                                                    <li><a href="javascript:;">Televisions</a>
                                                    </li>
                                                    <li><a href="javascript:;">Lighting</a>
                                                    </li>
                                                    <li><a href="javascript:;">Smart Watch</a>
                                                    </li>
                                                    <li><a href="javascript:;">Galaxy Phones</a>
                                                    </li>
                                                    <li><a href="javascript:;">PC Monitors</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- end col-3 -->
                                            <div class="col-12 col-xl-4 d-none d-xl-block">
                                                <div class="pramotion-banner1">
                                                    <img src="{{ asset('assets/images/gallery/menu-img.jpg') }}"
                                                        class="img-fluid" alt="" />
                                                </div>
                                            </div>
                                            <!-- end col-3 -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </li> --}}
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                        data-bs-toggle="dropdown">
                                        Shop <i class='bx bx-chevron-down ms-1'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item dropdown"><a
                                                class="dropdown-item dropdown-toggle dropdown-toggle-nocaret"
                                                href="#">Shop Layouts <i
                                                    class='bx bx-chevron-right float-end'></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="shop-grid-left-sidebar.html">Shop
                                                        Grid - Left Sidebar</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-grid-right-sidebar.html">Shop
                                                        Grid - Right Sidebar</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-list-left-sidebar.html">Shop
                                                        List - Left Sidebar</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-list-right-sidebar.html">Shop
                                                        List - Right Sidebar</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Shop
                                                        Grid - Top Filter</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-list-filter-on-top.html">Shop
                                                        List - Top Filter</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="product-details.html">Product Details</a>
                                        </li>
                                        <li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a>
                                        </li>
                                        <li><a class="dropdown-item" href="shop-categories.html">Shop Categories</a>
                                        </li>
                                        <li><a class="dropdown-item" href="checkout-details.html">Billing Details</a>
                                        </li>
                                        <li><a class="dropdown-item" href="checkout-shipping.html">Checkout
                                                Shipping</a>
                                        </li>
                                        <li><a class="dropdown-item" href="checkout-payment.html">Payment Method</a>
                                        </li>
                                        <li><a class="dropdown-item" href="checkout-review.html">Order Review</a>
                                        </li>
                                        <li><a class="dropdown-item" href="checkout-complete.html">Checkout
                                                Complete</a>
                                        </li>
                                        <li><a class="dropdown-item" href="order-tracking.html">Order Tracking</a>
                                        </li>
                                        <li><a class="dropdown-item" href="product-comparison.html">Product
                                                Comparison</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('welcome.aboutUs') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('welcome.contactUs') }}">Contact</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                        data-bs-toggle="dropdown">
                                        Categories
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach ($catagorys as $catagory)
                                            <li><a class="dropdown-item"
                                                    href="#">{{ $catagory->catagory_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li> --}}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                        data-bs-toggle="dropdown">
                                        Account
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                        <li><a class="dropdown-item" href="{{ route('User.index') }}">Dashboard</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
