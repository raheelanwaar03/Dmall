@extends('User.layout.app')
@section('content')

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
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
                        <img class="img-profile rounded-circle"
                            src="{{ asset('assets/img/undraw_profile.svg') }}">
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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            {{-- Write your main content here --}}
            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow-none mb-0">

                        <section class="py-4">
                            <div class="container">
                                <div class="product-detail-card">
                                    <div
                                        class="product-detail-body d-flex justify-content-center align-itmes-around">
                                        <div class="mr-4">
                                            <img src="{{ asset('images/' . $product->product_img) }}"
                                              height="250px" width="250px" class="m-3"  alt="product image">
                                        </div>
                                        <form action="{{ route('User.AddToCart.store',['id'=>$product->id]) }}" method="Post">
                                            @csrf
                                            <div class="ml-4">
                                                <div class="mt-3">
                                                    <h5>Name: {{ $product->product_name }}</h5>
                                                    <h6>Discription :</h6>
                                                    <p class="mb-0">{{ $product->product_description }}</p>
                                                    <h6>Price : {{ $product->product_price }}</h6>
                                                    <p class="mb-0"></p>
                                                </div>
                                                <dl class="row mt-3">
                                                    <dt class="col-sm-3">Id</dt>
                                                    <br>
                                                    <dd class="col-sm-9">{{ $product->product_id }}</dd>
                                                </dl>
                                                <div>
                                                    <input type="text" value= "1" name="cart_qty" min="1">
                                                </div>
                                                <div class="d-flex gap-2 mt-3">
                                                    <button type="submit" class="btn btn-dark btn-ecomm"><i
                                                            class="bx bxs-cart-add"></i>Add to
                                                        Cart</button>
                                                    {{-- <a href="javascript:;" class="btn btn-light btn-ecomm"><i
                                                            class="bx bx-heart"></i>Add to
                                                        Wishlist</a> --}}
                                                </div>
                                                <hr />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
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
