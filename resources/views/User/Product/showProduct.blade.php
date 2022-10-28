@extends('User.layout.app')

@section('content')
    <section class="py-4">
        <div class="container">
            <h3 class="d-none">Dashboard</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @include('User.layout.sidebar')
                        <div class="col-lg-8">
                            <div class="card shadow-none mb-0">

                                <section class="py-4">
                                    <div class="container">
                                        <div class="product-detail-card">
                                            <div
                                                class="product-detail-body d-flex justify-content-center align-itmes-around">
                                                <div class="mr-4">
                                                    <img src="{{ asset('images/' . $product->product_img) }}"
                                                      height="250px" width="250px"  alt="product image">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="mt-3">
                                                        <h5>Name</h5>
                                                        <p>{{ $product->product_name }}</p>
                                                        <h6>Discription :</h6>
                                                        <p class="mb-0">{{ $product->product_description }}</p>
                                                    </div>
                                                    <dl class="row mt-3">
                                                        <dt class="col-sm-3">Product id</dt>
                                                        <dd class="col-sm-9">{{ $product->product_id }}</dd>
                                                    </dl>

                                                    <div class="d-flex gap-2 mt-3">
                                                        <a href="javascript:;" class="btn btn-dark btn-ecomm"><i
                                                                class="bx bxs-cart-add"></i>Add to
                                                            Cart</a>
                                                        <a href="javascript:;" class="btn btn-light btn-ecomm"><i
                                                                class="bx bx-heart"></i>Add to
                                                            Wishlist</a>
                                                    </div>
                                                    <hr />
                                                    {{-- <div class="product-sharing">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="">
                                                                <button type="button" class="btn-social bg-twitter"><i
                                                                        class='bx bxl-twitter'></i></button>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn-social bg-facebook"><i
                                                                        class='bx bxl-facebook'></i></button>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn-social bg-linkedin"><i
                                                                        class='bx bxl-linkedin'></i></button>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn-social bg-youtube"><i
                                                                        class='bx bxl-youtube'></i></button>
                                                            </div>
                                                            <div class="">
                                                                <button type="button" class="btn-social bg-pinterest"><i
                                                                        class='bx bxl-pinterest'></i></button>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

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
@section('pageName')
    Dashboard
@endsection
