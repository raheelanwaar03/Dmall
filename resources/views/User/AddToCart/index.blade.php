@extends('User.layout.app')
@section('content')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->username }}</span>
                            <img class="img-profile rounded-circle" src="{{ asset('assets/img/undraw_profile.svg') }}">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="container-fluid">
                {{-- Write yor main content here --}}
                <div class="page-wrapper">
                    <div class="page-content">
                        <section class="py-4">
                            <div class="container">
                                <div class="shop-cart">
                                    <div class="row">
                                        <div class="col-12 col-xl-8">
                                            <div class="shop-cart-list mb-3 p-3">
                                                @forelse ($cartProducts as $cartProduct)
                                                    <div class="row align-items-center g-3">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="d-lg-flex align-items-center gap-3">
                                                                <div class="cart-img text-center text-lg-start">
                                                                    <img src="{{ asset('images/' . $cartProduct->product_img) }}"
                                                                        width="130" alt="">
                                                                </div>
                                                                <div class="cart-detail text-center text-lg-start">
                                                                    <h6 class="mb-2">{{ $cartProduct->product_name }}</h6>
                                                                    <p class="mb-0">Size: <span>Regular</span>
                                                                    </p>
                                                                    <p class="mb-2">Color: <span>White & Blue</span>
                                                                    </p>
                                                                    <h5 class="mb-0">{{ $cartProduct->product_price }}
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-3">
                                                            <form
                                                                action="{{ route('User.AddToCart.update', ['id' => $cartProduct->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div
                                                                    class="cart-action d-flex justify-content-center align-items-center text-center">
                                                                    <input type="number" name="cart_product_qty"
                                                                        class="form-control rounded-0"
                                                                        value="{{ $cartProduct->cart_product_qty }}"
                                                                        min="1">
                                                                    {{-- <input type="hidden" value="{{ $cartProduct->product_id }}"> --}}
                                                                    <button type="submit"
                                                                        class="btn btn-warning text-light">
                                                                        <i class='bx bx-repost'></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-12 col-lg-3">
                                                            <div class="text-center">
                                                                <div
                                                                    class="d-flex gap-3 justify-content-center justify-content-lg-end">
                                                                    <a href="{{ route('User.AddToCart.destroy', ['id' => $cartProduct->id]) }}"
                                                                        class="btn btn-outline-dark rounded-0 btn-ecomm"><i
                                                                            class='bx bx-x'></i>Remove</a>
                                                                    {{-- <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-heart me-0'></i></a> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @empty
                                                    <h5>You have not any Product in Cart</h5>
                                                @endforelse
                                                <hr>
                                                <div class="d-lg-flex align-items-center gap-2">
                                                    <a href="{{ route('welcome') }}" class="btn btn-dark btn-ecomm"><i
                                                            class='bx bx-shopping-bag'></i> Continue Shoping</a>
                                                    <a href="javascript:;" class="btn btn-light btn-ecomm ms-auto"><i
                                                            class='bx bx-x-circle'></i> Clear Cart</a>
                                                    {{-- <a href="javascript:;" class="btn btn-white btn-ecomm"><i class='bx bx-refresh'></i> Update Cart</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-4">
                                            <div class="checkout-form p-3 bg-light">
                                                {{-- <div class="card rounded-0 border bg-transparent shadow-none">
                                            <div class="card-body">
                                                <p class="fs-5">Apply Discount Code</p>
                                                <div class="input-group">
                                                    <input type="text" class="form-control rounded-0" placeholder="Enter discount code">
                                                    <button class="btn btn-dark btn-ecomm" type="button">Apply</button>
                                                </div>
                                            </div>
                                        </div> --}}

                                                <form action="{{ route('User.Address.store') }}" method="POST">
                                                    @csrf
                                                    <div class="card rounded-0 border bg-transparent shadow-none">
                                                        <div class="card-body">
                                                            <p class="fs-5">Shiping Address</p>
                                                            <div class="my-3 border-top"></div>
                                                            <div class="mb-3">
                                                                <label class="form-label">City Name</label>
                                                                <input type="text" name="user_city"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Area</label>
                                                                <input type="text" name="user_area"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Street</label>
                                                                <input type="text" name="user_street"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-0">
                                                                <label class="form-label">Zip/Postal Code</label>
                                                                <input type="text" name="user_zip"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn text-light btn-warning">Add
                                                        Addrss</button>
                                                </form>
                                                <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                                    <div class="card-body">
                                                        <p class="mb-2">Total Requested Items: <span
                                                                class="float-end">{{ cartProductQuantity() }}</span>
                                                        </p>
                                                        <p class="mb-2">Total Price: <span
                                                                class="float-end">{{ orderTotalPrice() }}</span>
                                                        </p>
                                                        {{-- <p class="mb-2">Taxes: <span class="float-end">$14.00</span>
                                                    </p>
                                                    <p class="mb-0">Discount: <span class="float-end">--</span>
                                                    </p> --}}
                                                        <div class="my-3 border-top"></div>
                                                        <h5 class="mb-0">Order Total: <span
                                                                class="float-end">{{ orderTotalPrice() }}</span></h5>
                                                        <div class="my-4"></div>
                                                        <div class="d-grid">
                                                            <form action="{{ route('User.Order.Store') }}"
                                                                method="Post">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-dark btn-ecomm">Proceed to
                                                                    Checkout</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
    </div>
    </div>
@endsection
