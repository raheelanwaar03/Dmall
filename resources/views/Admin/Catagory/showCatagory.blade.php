@extends('Admin.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
        </div>
        <h2 class="text-center">Product Details</h2>
        <hr>
        <section class="py-4">
            <div class="container">
                <div class="product-detail-card">
                    <div class="product-detail-body d-flex justify-content-center align-itmes-between">
                        <div>
                            <img src="{{ asset('images/' . $catagory->catagory_img) }}" alt="">
                        </div>
                        <div class="ml-4">
                            <div class="mt-3">
                                <h5>Name</h5>
                                <p>{{ $catagory->catagory_name }}</p>
                                <h6>Discription :</h6>
                                <p class="mb-0">{{ $catagory->catagory_des }}</p>
                            </div>
                            <dl class="row mt-3">
                                <dt class="col-sm-3">Product id</dt>
                                <dd class="col-sm-9">#BHU5879</dd>
                            </dl>

                            <div class="d-flex gap-2 mt-3">
                                <a href="javascript:;" class="btn btn-dark btn-ecomm"><i class="bx bxs-cart-add"></i>Add to
                                    Cart</a>
                                <a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to
                                    Wishlist</a>
                            </div>
                            <hr />
                            <div class="product-sharing">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
