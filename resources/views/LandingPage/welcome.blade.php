@extends('layouts.app')

@section('content')
    <section class="slider-section mb-4">
        <div class="first-slider p-0">

            <div class="banner-slider owl-carousel owl-theme">
                <div class="item">
                    <div class="position-relative">
                        <div class="position-absolute top-50 slider-content translate-middle">
                            <h3 class="h3 fw-bold d-none d-md-block">New Trending</h3>
                            <h1 class="h1 fw-bold">Women Fashion</h1>
                            <p class="fw-bold text-dark d-none d-md-block"><i>Last call for upto 15%</i></p>
                            <div class=""><a class="btn btn-dark btn-ecomm px-4"
                                    href="{{ route('welcome.Products') }}">Shop
                                    Now</a>
                            </div>
                        </div>
                        <a href="javascript:;">
                            <img src="{{ asset('assets/images/banners/01.png') }}" class="img-fluid" alt="...">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="position-relative">
                        <div class="position-absolute top-50 slider-content translate-middle">
                            <h3 class="h3 fw-bold d-none d-md-block">New Trending</h3>
                            <h1 class="h1 fw-bold">Men Fashion</h1>
                            <p class="fw-bold text-dark d-none d-md-block"><i>Last call for upto 15%</i></p>
                            <div class=""><a class="btn btn-dark btn-ecomm px-4"
                                    href="{{ route('welcome.Products') }}">Shop
                                    Now</a>
                            </div>
                        </div>
                        <a href="javascript:;">
                            <img src="{{ asset('assets/images/banners/02.png') }}" class="img-fluid" alt="...">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="position-relative">
                        <div class="position-absolute top-50 slider-content translate-middle">
                            <h3 class="h3 fw-bold d-none d-md-block">New Trending</h3>
                            <h1 class="h1 fw-bold">Kids Fashion</h1>
                            <p class="fw-bold text-dark d-none d-md-block"><i>Last call for upto 15%</i></p>
                            <div class=""><a class="btn btn-dark btn-ecomm px-4"
                                    href="{{ route('welcome.Products') }}">Shop
                                    Now</a>
                            </div>
                        </div>
                        <a href="javascript:;">
                            <img src="{{ asset('assets/images/banners/04.png') }}" class="img-fluid" alt="...">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="page-wrapper">
        <div class="page-content">
            <section class="py-4">
                <div class="container">

                    <div class="row row-cols-1 row-cols-lg-3 g-4">
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-center p-3 border">
                                <div class="fs-1 text-content"><i class='bx bx-taxi'></i>
                                </div>
                                <div class="info-box-content ps-3">
                                    <h6 class="mb-0 fw-bold">FREE SHIPPING &amp; RETURN</h6>
                                    <p class="mb-0">Free shipping on all orders over pkr:49</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="d-flex align-items-center justify-content-center p-3 border">
                                <div class="fs-1 text-content"><i class='bx bx-dollar-circle'></i>
                                </div>
                                <div class="info-box-content ps-3">
                                    <h6 class="mb-0 fw-bold">MONEY BACK GUARANTEE</h6>
                                    <p class="mb-0">100% money back guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-center p-3 border">
                                <div class="fs-1 text-content"><i class='bx bx-support'></i>
                                </div>
                                <div class="info-box-content ps-3">
                                    <h6 class="mb-0 fw-bold">ONLINE SUPPORT 24/7</h6>
                                    <p class="mb-0">Awesome Support for 24/7 Days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-4">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-4">
                        <div class="col">
                            <div class="card rounded-0 shadow-none bg-info bg-opacity-25">
                                <div class="row g-0 align-items-center">
                                    <div class="col">
                                        <img src="{{ asset('assets/images/promo/01.png') }}" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="card-title text-uppercase fw-bold">Men Wear</h5>
                                            <p class="card-text text-uppercase">Starting at $9</p>
                                            <a href="{{ route('welcome.Products') }}"
                                                class="btn btn-outline-dark btn-ecomm">SHOP
                                                NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0 shadow-none bg-danger bg-opacity-25">
                                <div class="row g-0 align-items-center">
                                    <div class="col">
                                        <img src="{{ asset('assets/images/promo/02.png') }}" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="card-title text-uppercase fw-bold">Women Wear</h5>
                                            <p class="card-text text-uppercase">Starting at $9</p> <a
                                                href="{{ route('welcome.Products') }}"
                                                class="btn btn-outline-dark btn-ecomm">SHOP
                                                NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card rounded-0 shadow-none bg-warning bg-opacity-25">
                                <div class="row g-0 align-items-center">
                                    <div class="col">
                                        <img src="{{ asset('assets/images/promo/03.png') }}" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="card-title text-uppercase fw-bold">Kids Wear</h5>
                                            <p class="card-text text-uppercase">Starting at pkr:200</p><a
                                                href="{{ route('welcome.Products') }}"
                                                class="btn btn-outline-dark btn-ecomm">SHOP
                                                NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-4">
                <div class="container">
                    <div class="separator pb-4">
                        <div class="line"></div>
                        <h5 class="mb-0 fw-bold separator-title">FEATURED PRODUCTS</h5>
                        <div class="line"></div>
                    </div>
                    <div class="product-grid">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3 g-sm-4">
                            @forelse ($products as $product)
                                <div class="col">
                                    <div class="card">
                                        <form action="{{ route('User.AddToCart.store', ['id' => $product->id]) }}"
                                            method="Post">
                                            @csrf
                                            <div class="position-relative overflow-hidden">
                                                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                                    <button title="Add Product To Cart" type="submit"
                                                        class="btn btn-sm style"><i
                                                            class="bx bx-shopping-bag"></i></button>
                                                </div>
                                                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                                    <a href="{{ route('User.Product.Show', ['id' => $product->id]) }}">View
                                                        Product</a>
                                                </div>
                                                <a href="javascript:;">
                                                    <img src="{{ asset('images/' . $product->product_img) }}"
                                                        class="img-fluid" alt="...">
                                                </a>
                                            </div>
                                            <div class="card-body px-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <p class="mb-1 product-short-name">
                                                            {{ $product->product_catagory }}
                                                        </p>
                                                        <h6 class="mb-0 fw-bold product-short-title">
                                                            {{ $product->product_name }}</h6>
                                                    </div>

                                                    <div
                                                        class="icon-wishlist d-flex justify-content-end align-items-center">
                                                        <input type="number" min='1' name="cart_qty"
                                                            value="1" class="w-25">
                                                    </div>
                                        </form>
                                    </div>
                                    <div class="cursor-pointer rating mt-2">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </div>
                                    <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">

                                        @if ($product->product_discount !== null)
                                            <div class="h6 fw-bold">pkr:{{ $product->product_discount }}</div>
                                            <div style="text-decoration: line-through" class="h6 fw-bold">
                                                pkr:{{ $product->product_price }}</div>
                                        @else
                                            <div class="h6 fw-bold">pkr:{{ $product->product_price }}</div>
                                        @endif
                                    </div>
                                </div>
                        </div>
                    </div>
                @empty
                <h5>
                    Admin have not Enter any Product yet.
                </h5>
                {{-- <div class="col">
                                <div class="card">
                                    <div class="position-relative overflow-hidden">
                                        <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                            <a href="javascript:;"><i class='bx bx-cart-add' ></i></a>
                                          </div>
                                      <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewProduct">Quick View</a>
                                      </div>
                                      <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/01.png') }}" class="img-fluid" alt="...">
                                      </a>
                                    </div>
                                    <div class="card-body px-0">
                                      <div class="d-flex align-items-center justify-content-between">
                                          <div class="">
                                              <p class="mb-1 product-short-name">Topwear</p>
                                              <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                                          </div>
                                          <div class="icon-wishlist">
                                              <a href="javascript:;"><i class="bx bx-heart"></i></a>
                                          </div>
                                      </div>
                                      <div class="cursor-pointer rating mt-2">
                                          <i class="bx bxs-star text-warning"></i>
                                          <i class="bx bxs-star text-warning"></i>
                                          <i class="bx bxs-star text-warning"></i>
                                          <i class="bx bxs-star text-warning"></i>
                                          <i class="bx bxs-star text-warning"></i>
                                      </div>
                    <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00
                        </div>
                        <div class="h6 fw-bold">$48.00</div>
                    </div>
                </div> --}}
        </div>
    {{-- </div>
    <div class="col">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                </div>
                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                    <a href="{{ route('welcome.Products') }}">Quick
                        View</a>
                </div>
                <a href="javascript:;">
                    <img src="{{ asset('assets/images/products/02.png') }}" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="card-body px-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <p class="mb-1 product-short-name">Topwear</p>
                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                    </div>
                    <div class="icon-wishlist">
                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="cursor-pointer rating mt-2">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                </div>
                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00</div>
                    <div class="h6 fw-bold">$48.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                </div>
                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                    <a href="{{ route('welcome.Products') }}">Quick
                        View</a>
                </div>
                <a href="javascript:;">
                    <img src="{{ asset('assets/images/products/03.png') }}" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="card-body px-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <p class="mb-1 product-short-name">Topwear</p>
                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                    </div>
                    <div class="icon-wishlist">
                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="cursor-pointer rating mt-2">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                </div>
                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00</div>
                    <div class="h6 fw-bold">$48.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                </div>
                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                    <a href="{{ route('welcome.Products') }}">Quick
                        View</a>
                </div>
                <a href="javascript:;">
                    <img src="{{ asset('assets/images/products/04.png') }}" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="card-body px-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <p class="mb-1 product-short-name">Topwear</p>
                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                    </div>
                    <div class="icon-wishlist">
                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="cursor-pointer rating mt-2">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                </div>
                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00</div>
                    <div class="h6 fw-bold">$48.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                </div>
                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                    <a href="{{ route('welcome.Products') }}">Quick
                        View</a>
                </div>
                <a href="javascript:;">
                    <img src="{{ asset('assets/images/products/05.png') }}" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="card-body px-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <p class="mb-1 product-short-name">Topwear</p>
                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                    </div>
                    <div class="icon-wishlist">
                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="cursor-pointer rating mt-2">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                </div>
                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00</div>
                    <div class="h6 fw-bold">$48.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                </div>
                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                    <a href="{{ route('welcome.Products') }}">Quick
                        View</a>
                </div>
                <a href="javascript:;">
                    <img src="{{ asset('assets/images/products/06.png') }}" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="card-body px-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <p class="mb-1 product-short-name">Topwear</p>
                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                    </div>
                    <div class="icon-wishlist">
                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="cursor-pointer rating mt-2">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                </div>
                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00</div>
                    <div class="h6 fw-bold">$48.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                </div>
                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                    <a href="{{ route('welcome.Products') }}">Quick
                        View</a>
                </div>
                <a href="javascript:;">
                    <img src="{{ asset('assets/images/products/07.png') }}" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="card-body px-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <p class="mb-1 product-short-name">Topwear</p>
                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                    </div>
                    <div class="icon-wishlist">
                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="cursor-pointer rating mt-2">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                </div>
                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00</div>
                    <div class="h6 fw-bold">$48.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                </div>
                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                    <a href="{{ route('welcome.Products') }}">Quick
                        View</a>
                </div>
                <a href="javascript:;">
                    <img src="{{ asset('assets/images/products/08.png') }}" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="card-body px-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <p class="mb-1 product-short-name">Topwear</p>
                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                    </div>
                    <div class="icon-wishlist">
                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="cursor-pointer rating mt-2">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                </div>
                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00</div>
                    <div class="h6 fw-bold">$48.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                </div>
                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                    <a href="{{ route('welcome.Products') }}">Quick
                        View</a>
                </div>
                <a href="javascript:;">
                    <img src="{{ asset('assets/images/products/09.png') }}" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="card-body px-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <p class="mb-1 product-short-name">Topwear</p>
                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                    </div>
                    <div class="icon-wishlist">
                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="cursor-pointer rating mt-2">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                </div>
                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00</div>
                    <div class="h6 fw-bold">$48.00</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="position-relative overflow-hidden">
                <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                </div>
                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                    <a href="{{ route('welcome.Products') }}">Quick
                        View</a>
                </div>
                <a href="javascript:;">
                    <img src="{{ asset('assets/images/products/10.png') }}" class="img-fluid" alt="...">
                </a>
            </div>
            <div class="card-body px-0">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <p class="mb-1 product-short-name">Topwear</p>
                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                    </div>
                    <div class="icon-wishlist">
                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                    </div>
                </div>
                <div class="cursor-pointer rating mt-2">
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                    <i class="bx bxs-star text-warning"></i>
                </div>
                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">$59.00</div>
                    <div class="h6 fw-bold">$48.00</div>
                </div>
            </div>
        </div>
    </div>
    </div> --}}
    @endforelse
    <div>
        {{ $products->withQueryString()->links('pagination::bootstrap-5') }}
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="separator pb-4">
                <div class="line"></div>
                <h5 class="mb-0 fw-bold separator-title">New Arrivals</h5>
                <div class="line"></div>
            </div>
            <div class="product-grid">
                <div class="new-arrivals owl-carousel owl-theme position-relative">
                    <div class="item">
                        <div class="card">
                            <div class="position-relative overflow-hidden">
                                {{-- <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                </div>
                                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                    <a href="javascript:;" data-bs-toggle="modal"
                                        data-bs-target="#QuickViewProduct">Quick View</a>
                                </div> --}}
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/images/products/11.png') }}" class="img-fluid"
                                        alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1 product-short-name">Topwear</p>
                                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                                    </div>
                                    <div class="icon-wishlist">
                                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                                    </div>
                                </div>
                                <div class="cursor-pointer rating mt-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                        $59.00</div>
                                    <div class="h6 fw-bold">$48.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="position-relative overflow-hidden">
                                {{-- <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                </div>
                                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                    <a href="javascript:;" data-bs-toggle="modal"
                                        data-bs-target="#QuickViewProduct">Quick View</a>
                                </div> --}}
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/images/products/12.png') }}" class="img-fluid"
                                        alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1 product-short-name">Topwear</p>
                                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                                    </div>
                                    <div class="icon-wishlist">
                                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                                    </div>
                                </div>
                                <div class="cursor-pointer rating mt-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                        $59.00</div>
                                    <div class="h6 fw-bold">$48.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="position-relative overflow-hidden">
                                {{-- <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                </div>
                                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                    <a href="javascript:;" data-bs-toggle="modal"
                                        data-bs-target="#QuickViewProduct">Quick View</a>
                                </div> --}}
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/images/products/13.png') }}" class="img-fluid"
                                        alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1 product-short-name">Topwear</p>
                                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                                    </div>
                                    <div class="icon-wishlist">
                                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                                    </div>
                                </div>
                                <div class="cursor-pointer rating mt-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                        $59.00</div>
                                    <div class="h6 fw-bold">$48.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="position-relative overflow-hidden">
                                {{-- <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                </div>
                                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                    <a href="javascript:;" data-bs-toggle="modal"
                                        data-bs-target="#QuickViewProduct">Quick View</a>
                                </div> --}}
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/images/products/14.png') }}" class="img-fluid"
                                        alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1 product-short-name">Topwear</p>
                                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                                    </div>
                                    <div class="icon-wishlist">
                                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                                    </div>
                                </div>
                                <div class="cursor-pointer rating mt-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                        $59.00</div>
                                    <div class="h6 fw-bold">$48.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="position-relative overflow-hidden">
                                {{-- <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                </div>
                                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                    <a href="javascript:;" data-bs-toggle="modal"
                                        data-bs-target="#QuickViewProduct">Quick View</a>
                                </div> --}}
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/images/products/15.png') }}" class="img-fluid"
                                        alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1 product-short-name">Topwear</p>
                                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                                    </div>
                                    <div class="icon-wishlist">
                                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                                    </div>
                                </div>
                                <div class="cursor-pointer rating mt-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                        $59.00</div>
                                    <div class="h6 fw-bold">$48.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="position-relative overflow-hidden">
                                {{-- <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                </div>
                                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                    <a href="javascript:;" data-bs-toggle="modal"
                                        data-bs-target="#QuickViewProduct">Quick View</a>
                                </div> --}}
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/images/products/16.png') }}" class="img-fluid"
                                        alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1 product-short-name">Topwear</p>
                                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                                    </div>
                                    <div class="icon-wishlist">
                                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                                    </div>
                                </div>
                                <div class="cursor-pointer rating mt-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                        $59.00</div>
                                    <div class="h6 fw-bold">$48.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="position-relative overflow-hidden">
                                {{-- <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                </div>
                                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                    <a href="javascript:;" data-bs-toggle="modal"
                                        data-bs-target="#QuickViewProduct">Quick View</a>
                                </div> --}}
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/images/products/17.png') }}" class="img-fluid"
                                        alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1 product-short-name">Topwear</p>
                                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                                    </div>
                                    <div class="icon-wishlist">
                                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                                    </div>
                                </div>
                                <div class="cursor-pointer rating mt-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                        $59.00</div>
                                    <div class="h6 fw-bold">$48.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="position-relative overflow-hidden">
                                {{-- <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                    <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                </div>
                                <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                    <a href="javascript:;" data-bs-toggle="modal"
                                        data-bs-target="#QuickViewProduct">Quick View</a>
                                </div> --}}
                                <a href="javascript:;">
                                    <img src="{{ asset('assets/images/products/18.png') }}" class="img-fluid"
                                        alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <p class="mb-1 product-short-name">Topwear</p>
                                        <h6 class="mb-0 fw-bold product-short-title">White Polo Shirt</h6>
                                    </div>
                                    <div class="icon-wishlist">
                                        <a href="javascript:;"><i class="bx bx-heart"></i></a>
                                    </div>
                                </div>
                                <div class="cursor-pointer rating mt-2">
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <div class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                    <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                        $59.00</div>
                                    <div class="h6 fw-bold">$48.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 bg-dark">
        <div class="container">
            <div class="add-banner">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 g-4">
                    <div class="col d-flex">
                        <div class="card rounded-0 w-100 border-0 shadow-none">
                            <img src="{{ asset('assets/images/promo/04') }}.png" class="img-fluid" alt="...">
                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                    class="">-10%</span>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Sunglasses Sale</h5>
                                <p class="card-text">See all Sunglasses and get 10% off at all Sunglasses
                                </p> <a href="{{ route('welcome.Products') }}" class="btn btn-dark btn-ecomm">SHOP
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card rounded-0 w-100 border-0 shadow-none">
                            <img src="{{ asset('assets/images/promo/08.png') }}" class="img-fluid" alt="...">
                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                    class="">-80%</span>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Cosmetics Sales</h5>
                                <p class="card-text">Buy Cosmetics products and get 30% off at all
                                    Cosmetics</p> <a href="{{ route('welcome.Products') }}"
                                    class="btn btn-dark btn-ecomm">SHOP Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card rounded-0 w-100 border-0 shadow-none">
                            <img src="{{ asset('assets/images/promo/06.png') }}" class="img-fluid h-100" alt="...">
                            <div class="card-img-overlay text-center top-20">
                                <div class="border border-white border-2 py-3 bg-dark-3">
                                    <h5 class="card-title text-white">Fashion Summer Sale</h5>
                                    <p class="card-text text-uppercase fs-1 lh-1 mt-3 mb-2 text-white">Up
                                        to 80% off</p>
                                    <p class="card-text fs-5 text-white">On Top Fashion Brands</p> <a
                                        href="{{ route('welcome.Products') }}" class="btn btn-white btn-ecomm">SHOP
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card rounded-0 w-100 border-0 shadow-none">
                            <div class="position-absolute top-0 end-0 m-3 product-discount"><span
                                    class="">-50%</span>
                            </div>
                            <img src="{{ asset('assets/images/promo/07.png') }}" class="img-fluid" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-2 fw-bold text-uppercase">Super Sale</h5>
                                <p class="card-text text-uppercase fs-5 lh-1 mb-2">Up to 50% off</p>
                                <p class="card-text">On All Electronic</p> <a href="{{ route('welcome.Products') }}"
                                    class="btn btn-dark btn-ecomm">HURRY UP!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="separator pb-4">
                <div class="line"></div>
                <h5 class="mb-0 fw-bold separator-title">Browse Catergory</h5>
                <div class="line"></div>
            </div>

            <div class="product-grid">
                <div class="browse-category owl-carousel owl-theme">
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/01.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-0 text-uppercase fw-bold">Fashion</h6>
                                <p class="mb-0 font-12 text-uppercase">10 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/02.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Watches</h6>
                                <p class="mb-0 font-12 text-uppercase">8 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/03.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Shoes</h6>
                                <p class="mb-0 font-12 text-uppercase">14 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/04.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Bags</h6>
                                <p class="mb-0 font-12 text-uppercase">6 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/05.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Electronis</h6>
                                <p class="mb-0 font-12 text-uppercase">6 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/06.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Headphones</h6>
                                <p class="mb-0 font-12 text-uppercase">5 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/07.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Furniture</h6>
                                <p class="mb-0 font-12 text-uppercase">20 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/08.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Jewelry</h6>
                                <p class="mb-0 font-12 text-uppercase">16 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/09.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Sports</h6>
                                <p class="mb-0 font-12 text-uppercase">28 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/10.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Vegetable</h6>
                                <p class="mb-0 font-12 text-uppercase">15 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/11.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Medical</h6>
                                <p class="mb-0 font-12 text-uppercase">24 Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0">
                            <div class="card-body p-0">
                                <img src="{{ asset('assets/images/categories/12.png') }}" class="img-fluid"
                                    alt="...">
                            </div>
                            <div class="card-footer text-center bg-transparent border">
                                <h6 class="mb-1 text-uppercase fw-bold">Sunglasses</h6>
                                <p class="mb-0 font-12 text-uppercase">18 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                <div class="col">
                    <div class="text-center border p-3 bg-white">
                        <div class="font-50 text-dark"><i class='bx bx-cart-add'></i>
                        </div>
                        <h5 class="fs-5 text-uppercase mb-0 fw-bold">Free delivery</h5>
                        <p class="text-capitalize">Free delivery over $199</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
                            magna, et dapib.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center border p-3 bg-white">
                        <div class="font-50 text-dark"><i class='bx bx-credit-card'></i>
                        </div>
                        <h5 class="fs-5 text-uppercase mb-0 fw-bold">Secure payment</h5>
                        <p class="text-capitalize">We possess SSL / Secure сertificate</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
                            magna, et dapib.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center border p-3 bg-white">
                        <div class="font-50 text-dark"> <i class='bx bx-dollar-circle'></i>
                        </div>
                        <h5 class="fs-5 text-uppercase mb-0 fw-bold">Free returns</h5>
                        <p class="text-capitalize">We return money within 30 days</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
                            magna, et dapib.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center border p-3 bg-white">
                        <div class="font-50 text-dark"> <i class='bx bx-support'></i>
                        </div>
                        <h5 class="fs-5 text-uppercase mb-0 fw-bold">Customer Support</h5>
                        <p class="text-capitalize">Friendly 24/7 customer support</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum
                            magna, et dapib.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="pb-4 text-center">
                <h5 class="mb-0 fw-bold text-uppercase">Latest News</h5>
            </div>
            <div class="product-grid">
                <div class="latest-news owl-carousel owl-theme">
                    <div class="item">
                        <div class="card rounded-0 product-card border">
                            <div class="news-date">
                                <div class="date-number">24</div>
                                <div class="date-month">FEB</div>
                            </div>
                            <a href="javascript:;">
                                <img src="{{ asset('assets/images/blogs/01.png') }}" class="card-img-top border-bottom"
                                    alt="...">
                            </a>
                            <div class="card-body">
                                <div class="news-title">
                                    <a href="javascript:;">
                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                    </a>
                                </div>
                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...
                                </p>
                            </div>
                            <div class="card-footer border-top bg-transparent">
                                <a href="javascript:;" class="link-dark">0 Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0 product-card border">
                            <div class="news-date">
                                <div class="date-number">24</div>
                                <div class="date-month">FEB</div>
                            </div>
                            <a href="javascript:;">
                                <img src="{{ asset('assets/images/blogs/02.png') }}" class="card-img-top border-bottom"
                                    alt="...">
                            </a>
                            <div class="card-body">
                                <div class="news-title">
                                    <a href="javascript:;">
                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                    </a>
                                </div>
                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...
                                </p>
                            </div>
                            <div class="card-footer border-top bg-transparent">
                                <a href="javascript:;" class="link-dark">0 Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0 product-card border">
                            <div class="news-date">
                                <div class="date-number">24</div>
                                <div class="date-month">FEB</div>
                            </div>
                            <a href="javascript:;">
                                <img src="{{ asset('assets/images/blogs/03.png') }}" class="card-img-top border-bottom"
                                    alt="...">
                            </a>
                            <div class="card-body">
                                <div class="news-title">
                                    <a href="javascript:;">
                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                    </a>
                                </div>
                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...
                                </p>
                            </div>
                            <div class="card-footer border-top bg-transparent">
                                <a href="javascript:;" class="link-dark">0 Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0 product-card border">
                            <div class="news-date">
                                <div class="date-number">24</div>
                                <div class="date-month">FEB</div>
                            </div>
                            <a href="javascript:;">
                                <img src="{{ asset('assets/images/blogs/04.png') }}" class="card-img-top border-bottom"
                                    alt="...">
                            </a>
                            <div class="card-body">
                                <div class="news-title">
                                    <a href="javascript:;">
                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                    </a>
                                </div>
                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...
                                </p>
                            </div>
                            <div class="card-footer border-top bg-transparent">
                                <a href="javascript:;" class="link-dark">0 Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0 product-card border">
                            <div class="news-date">
                                <div class="date-number">24</div>
                                <div class="date-month">FEB</div>
                            </div>
                            <a href="javascript:;">
                                <img src="{{ asset('assets/images/blogs/05.png') }}" class="card-img-top border-bottom"
                                    alt="...">
                            </a>
                            <div class="card-body">
                                <div class="news-title">
                                    <a href="javascript:;">
                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                    </a>
                                </div>
                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...
                                </p>
                            </div>
                            <div class="card-footer border-top bg-transparent">
                                <a href="javascript:;" class="link-dark">0 Comments</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-0 product-card border">
                            <div class="news-date">
                                <div class="date-number">24</div>
                                <div class="date-month">FEB</div>
                            </div>
                            <a href="javascript:;">
                                <img src="{{ asset('assets/images/blogs/06.png') }}" class="card-img-top border-bottom"
                                    alt="...">
                            </a>
                            <div class="card-body">
                                <div class="news-title">
                                    <a href="javascript:;">
                                        <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                    </a>
                                </div>
                                <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...
                                </p>
                            </div>
                            <div class="card-footer border-top bg-transparent">
                                <a href="javascript:;" class="link-dark">0 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-4">
                <div class="container">
                    <h3 class="d-none">Brands</h3>
                    <div class="brand-grid">
                        <div class="brands-shops owl-carousel owl-theme border">
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/brands/01.png') }}" class="img-fluid"
                                            alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/brands/02.png') }}" class="img-fluid"
                                            alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/brands/03.png') }}" class="img-fluid"
                                            alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/brands/04.png') }}" class="img-fluid"
                                            alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/brands/05.png') }}" class="img-fluid"
                                            alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/brands/06.png') }}" class="img-fluid"
                                            alt="...">
                                    </a>
                                </div>
                            </div>
                            <div class="item border-end">
                                <div class="p-4">
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/brands/07.png') }}" class="img-fluid"
                                            alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
    <section class="py-4 border-top">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="bestseller-list mb-3">
                        <h6 class="mb-3 text-uppercase fw-bold">Best Selling Products</h6>
                        <hr>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/01.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Men Casual Shirts</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>$59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/02.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Formal Coat Pant</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>$59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/03.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Women Blue Jeans</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>$59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/04.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Yellow Track Suit</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>$59.00</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="featured-list mb-3">
                        <h6 class="mb-3 text-uppercase fw-bold">Featured Products</h6>
                        <hr>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/05.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Men Sports Shoes</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/06.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Black Sofa Set</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/07.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Sports Watch</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/08.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Women Blue Heels</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="new-arrivals-list mb-3">
                        <h6 class="mb-3 text-uppercase fw-bold">New arrivals</h6>
                        <hr>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="jproduct-details.html">
                                    <img src="{{ asset('assets/images/products/09.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Men Black Cap</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/10.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Orange Headphone</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/11.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Samsung Mobile</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/12.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Apple Notebook</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="top-rated-products-list mb-3">
                        <h6 class="mb-3 text-uppercase fw-bold">Top rated Products</h6>
                        <hr>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/13.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Ronaldo Football</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/14.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Red Fancy Sofa</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/15.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Sports Cycle</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center gap-3">
                            <div class="bottom-product-img">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/images/products/16.png') }}" width="80"
                                        alt="">
                                </a>
                            </div>
                            <div class="ms-0">
                                <h6 class="mb-0 fw-light mb-1 fw-bold">Circular Table</h6>
                                <div class="rating"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                </div>
                                <p class="mb-0 pro-price"><strong>pkr:59.00</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
@endsection
