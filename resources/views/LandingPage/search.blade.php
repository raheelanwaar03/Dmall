@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Searched Product</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('welcome.Products') }}">All Products</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-4">
                <div class="container">
                    <div class="product-grid">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                            @forelse ($products as $product)
                                <div class="col">
                                    <div class="card rounded-0 border">
                                        <form action="{{ route('User.AddToCart.store', ['id' => $product->id]) }}"
                                            method="POST">
                                            @csrf
                                            <a href="{{ route('User.Product.Show',['id'=>$product->id]) }}">
                                                <img src="{{ asset('images/' . $product->product_img) }}"
                                                height="200px" width="310px" alt="{{ $product->product_name }}">
                                            </a>
                                                <input class="w-25" type="hidden" min="1" name="cart_qty" value="1">
                                            <div class="card-body">
                                                <div class="product-info">
                                                    <a href="javascript:;">
                                                        <p class="product-catergory font-13 mb-1">
                                                            {{ $product->product_name }}
                                                        </p>
                                                    </a>
                                                    <a href="javascript:;">
                                                        <h6 class="product-name mb-2">{{ $product->product_catagory }}</h6>
                                                    </a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="mb-1 product-price">
                                                            @if ($product->product_discount !== null)
                                                                <div class="h6 fw-bold">Pkr:{{ $product->product_discount }}
                                                                </div>
                                                                <div style="text-decoration: line-through"
                                                                    class="h6 fw-bold">
                                                                    Pkr:{{ $product->product_price }}</div>
                                                            @else
                                                                <div class="h6 fw-bold">Pkr:{{ $product->product_price }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="cursor-pointer ms-auto"> <i
                                                                class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                            <i class="bx bxs-star text-warning"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-action mt-2">
                                                        <div class="d-grid gap-2">
                                                            <button type="submit" class="btn btn-dark btn-ecomm"> <i
                                                                    class='bx bxs-cart-add'></i>Add to Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @empty
                                <h5>Admin have not posted new Products yet</h5>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
