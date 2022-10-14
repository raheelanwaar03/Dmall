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
    <title>Shopingo - eCommerce HTML Template</title>
</head>

<body>
    <div class="wrapper">
        <div class="header-wrapper">
            <div class="top-menu">
                <div class="container">
                    <nav class="navbar navbar-expand">
                        <div class="shiping-title d-none d-sm-flex">Welcome to our Shopingo store!</div>
                        <ul class="navbar-nav ms-auto d-none d-lg-flex">
                            <li class="nav-item"><a class="nav-link" href="order-tracking.html">Track Order</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about-us.html">About</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="shop-categories.html">Our Stores</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="blog-post.html">Blog</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="javascript:;">Help & FAQs</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">USD</a>
                                <ul class="dropdown-menu dropdown-menu-lg-end">
                                    <li><a class="dropdown-item" href="#">USD</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">EUR</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                    data-bs-toggle="dropdown">
                                    <div class="lang d-flex gap-1">
                                        <div><i class="flag-icon flag-icon-um"></i>
                                        </div>
                                        <div><span>ENG</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg-end">
                                    <a class="dropdown-item d-flex allign-items-center" href="javascript:;"> <i
                                            class="flag-icon flag-icon-de me-2"></i><span>German</span>
                                    </a> <a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
                                            class="flag-icon flag-icon-fr me-2"></i><span>French</span></a>
                                    <a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
                                            class="flag-icon flag-icon-um me-2"></i><span>English</span></a>
                                    <a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
                                            class="flag-icon flag-icon-in me-2"></i><span>Hindi</span></a>
                                    <a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
                                            class="flag-icon flag-icon-cn me-2"></i><span>Chinese</span></a>
                                    <a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
                                            class="flag-icon flag-icon-ae me-2"></i><span>Arabic</span></a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav social-link ms-lg-2 ms-auto">
                            <li class="nav-item"> <a class="nav-link" href="javascript:;"><i
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
                                    <a href="index.html">
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
                                    <h5 class="mb-0">+011 5827918</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <div class="top-cart-icons">
                                <nav class="navbar navbar-expand">
                                    <ul class="navbar-nav">
                                        <li class="nav-item"><a href="account-dashboard.html"
                                                class="nav-link cart-link"><i class='bx bx-user'></i></a>
                                        </li>
                                        <li class="nav-item"><a href="wishlist.html" class="nav-link cart-link"><i
                                                    class='bx bx-heart'></i></a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-large">
                                            <a href="#"
                                                class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link"
                                                data-bs-toggle="dropdown"> <span class="alert-count">8</span>
                                                <i class='bx bx-shopping-bag'></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:;">
                                                    <div class="cart-header">
                                                        <p class="cart-header-title mb-0">8 ITEMS</p>
                                                        <p class="cart-header-clear ms-auto mb-0">VIEW CART</p>
                                                    </div>
                                                </a>
                                                <div class="cart-list">
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Men White T-Shirt</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i
                                                                        class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{ asset('assets/images/products/01.png') }}"
                                                                        class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Puma Sports Shoes</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i
                                                                        class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{ asset('assets/images/products/05.png') }}"
                                                                        class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Women Red Sneakers</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i
                                                                        class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{ asset('assets/images/products/17.png') }}"
                                                                        class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Black Headphone</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i
                                                                        class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{ asset('assets/images/products/10.png') }}"
                                                                        class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Blue Girl Shoes</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i
                                                                        class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{ asset('assets/images/products/08.png') }}"
                                                                        class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Men Leather Belt</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i
                                                                        class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{ asset('assets/images/products/18.png') }}"
                                                                        class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Men Yellow T-Shirt</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i
                                                                        class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{ asset('assets/images/products/04.png') }}"
                                                                        class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:;">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h6 class="cart-product-title">Pool Charir</h6>
                                                                <p class="cart-product-price">1 X $29.00</p>
                                                            </div>
                                                            <div class="position-relative">
                                                                <div class="cart-product-cancel position-absolute"><i
                                                                        class='bx bx-x'></i>
                                                                </div>
                                                                <div class="cart-product">
                                                                    <img src="{{ asset('assets/images/products/16.png') }}"
                                                                        class="" alt="product image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a href="javascript:;">
                                                    <div class="text-center cart-footer d-flex align-items-center">
                                                        <h5 class="mb-0">TOTAL</h5>
                                                        <h5 class="mb-0 ms-auto">$189.00</h5>
                                                    </div>
                                                </a>
                                                <div class="d-grid p-3 border-top"> <a href="javascript:;"
                                                        class="btn btn-dark btn-ecomm">CHECKOUT</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown">
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
                                </li>
                                <li class="nav-item dropdown">
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
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="about-us.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us.html">Contact</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="shop-categories.html">Our Store</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                        data-bs-toggle="dropdown">
                                        Account
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="account-dashboard.html">Dashboard</a>
                                        </li>
                                        <li><a class="dropdown-item" href="account-downloads.html">Downloads</a>
                                        </li>
                                        <li><a class="dropdown-item" href="account-orders.html">My Orders</a>
                                        </li>
                                        <li><a class="dropdown-item" href="account-user-details.html">User Details</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="authentication-login.html">Login</a></li>
                                        <li><a class="dropdown-item" href="authentication-register.html">Register</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="authentication-reset-password.html">Password</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                        data-bs-toggle="dropdown">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                                        <li><a class="dropdown-item" href="blog-read.html">Blog Read</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
