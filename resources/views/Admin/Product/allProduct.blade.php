@extends('Admin.layout.app')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
    </div>
    <div class="row">
        <section class="py-4">
            <div class="container">
                <div class="separator pb-4">
                    <div class="line"></div>
                    <h5 class="mb-0 fw-bold separator-title">All PRODUCTS</h5>
                    <div class="line"></div>
                </div>
                <div class="product-grid">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3 g-sm-4">
                        <div class="col">
                            @forelse ($products as $product)
                            <div class="card">
                                <div class="position-relative overflow-hidden">
                                    <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                        <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                    </div>
                                    <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('images/' . $product->product_img) }}" class="img-fluid"
                                            alt="...">
                                    </a>
                                </div>
                                <div class="card-body px-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <p class="mb-1 product-short-name">{{ $product->product_name }}</p>
                                            <h6 class="mb-0 fw-bold product-short-title">{{ $product->product_description }}</h6>
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        {{-- <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div> --}}
                                        <div class="h6 fw-bold">{{ $product->product_price }}</div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h1 class="text-center display-3">No Product Fund</h1>
                            @endforelse
                        </div>
                        {{-- <div class="col">
                            <div class="card">
                                <div class="position-relative overflow-hidden">
                                    <div class="add-cart position-absolute top-0 end-0 mt-3 me-3">
                                        <a href="javascript:;"><i class='bx bx-cart-add'></i></a>
                                    </div>
                                    <div class="quick-view position-absolute start-0 bottom-0 end-0">
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/02.png') }}" class="img-fluid"
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div>
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
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/03.png') }}" class="img-fluid"
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div>
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
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/04.png') }}" class="img-fluid"
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div>
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
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/05.png') }}" class="img-fluid"
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div>
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
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/06.png') }}" class="img-fluid"
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div>
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
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/07.png') }}" class="img-fluid"
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div>
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
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/08.png') }}" class="img-fluid"
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div>
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
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/09.png') }}" class="img-fluid"
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div>
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
                                        <a href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#QuickViewProduct">Quick View</a>
                                    </div>
                                    <a href="javascript:;">
                                        <img src="{{ asset('assets/images/products/10.png') }}" class="img-fluid"
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
                                    <div
                                        class="product-price d-flex align-items-center justify-content-start gap-2 mt-2">
                                        <div class="h6 fw-light fw-bold text-secondary text-decoration-line-through">
                                            $59.00</div>
                                        <div class="h6 fw-bold">$48.00</div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>

@endsection
