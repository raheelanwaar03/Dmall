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

{{-- This website is developed by Raheel Anwaar. Whatsapp (03167007156) --}}

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
                                <form action="{{ route('searchProcuct') }}" class="input-group flex-nowrap pb-3 pb-xl-0">
                                    <input type="text" class="form-control w-100 border-dark border border-3"
                                        placeholder="Search for Products">
                                    <button class="btn btn-dark btn-ecomm border-3" type="submit">Search</button>
                                </form>
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
                                            <li class="nav-item"><a href="#"
                                                    class="nav-link cart-link"><i class='bx bx-user'></i></a>
                                            </li>
                                            <li class="nav-item"><a href="#"
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
            @else
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
                                <form action="{{ route('searchProcuct') }}" class="input-group flex-nowrap pb-3 pb-xl-0">
                                    <input type="text" class="form-control w-100 border-dark border border-3"
                                        placeholder="Search for Products">
                                    <button class="btn btn-dark btn-ecomm border-3" type="submit">Search</button>
                                </form>
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
                                            <li class="nav-item"><a href="#"
                                                    class="nav-link cart-link"><i class='bx bx-user'></i></a>
                                            </li>
                                            <li class="nav-item"><a href="#"
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
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('welcome.aboutUs') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('welcome.contactUs') }}">Contact</a>
                                </li>
                                @if (auth()->user())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('User.index') }}">Dashboard</a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
