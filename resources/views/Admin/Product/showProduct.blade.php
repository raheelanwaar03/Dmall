@extends('Admin.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
        </div>
        <section class="py-4">
            <div class="container">
                <div class="product-detail-card">
                    <div class="product-detail-body">
                        <div class="row g-0">
                            <div class="col-12 col-lg-5">
                                <div class="image-zoom-section">
                                    <div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
                                        <div class="item">
                                            <img src="{{ asset('images/'.$product->product_img) }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{ asset('images/'.$product->product_img) }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{ asset('images/'.$product->product_img) }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="{{ asset('images/'.$product->product_img) }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                        <button class="owl-thumb-item">
                                            <img src="{{ asset('images/'.$product->product_img) }}" class="" alt="">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{ asset('images/'.$product->product_img) }}" class="" alt="">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{ asset('images/'.$product->product_img) }}" class="" alt="">
                                        </button>
                                        <button class="owl-thumb-item">
                                            <img src="{{ asset('images/'.$product->product_img) }}" class="" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="product-info-section p-3">
                                    <h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
                                    <div class="product-rating d-flex align-items-center mt-2">
                                        <div class="rates cursor-pointer font-13">	<i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-light-4"></i>
                                        </div>
                                        <div class="ms-1">
                                            <p class="mb-0">(24 Ratings)</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mt-3 gap-2">
                                        <h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5>
                                        <h4 class="mb-0">$49.00</h4>
                                    </div>
                                    <div class="mt-3">
                                        <h6>Discription :</h6>
                                        <p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                                    </div>
                                    <dl class="row mt-3">	<dt class="col-sm-3">Product id</dt>
                                        <dd class="col-sm-9">#BHU5879</dd>	<dt class="col-sm-3">Delivery</dt>
                                        <dd class="col-sm-9">Russia, USA, and Europe</dd>
                                    </dl>
                                    <div class="row row-cols-auto align-items-center mt-3">
                                        <div class="col">
                                            <label class="form-label">Quantity</label>
                                            <select class="form-select form-select-sm">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Size</label>
                                            <select class="form-select form-select-sm">
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XS</option>
                                                <option>XL</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">Colors</label>
                                            <div class="color-indigators d-flex align-items-center gap-2">
                                                <div class="color-indigator-item bg-primary"></div>
                                                <div class="color-indigator-item bg-danger"></div>
                                                <div class="color-indigator-item bg-success"></div>
                                                <div class="color-indigator-item bg-warning"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                    <div class="d-flex gap-2 mt-3">
                                        <a href="javascript:;" class="btn btn-dark btn-ecomm"><i class="bx bxs-cart-add"></i>Add to Cart</a>
                                        <a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
                                    </div>
                                    <hr/>
                                    <div class="product-sharing">
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <div class="">
                                              <button type="button" class="btn-social bg-twitter"><i class='bx bxl-twitter'></i></button>
                                            </div>
                                            <div class="">
                                              <button type="button" class="btn-social bg-facebook"><i class='bx bxl-facebook'></i></button>
                                            </div>
                                            <div class="">
                                              <button type="button" class="btn-social bg-linkedin"><i class='bx bxl-linkedin'></i></button>
                                            </div>
                                            <div class="">
                                              <button type="button" class="btn-social bg-youtube"><i class='bx bxl-youtube'></i></button>
                                            </div>
                                            <div class="">
                                              <button type="button" class="btn-social bg-pinterest"><i class='bx bxl-pinterest'></i></button>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </section>
    @endsection
