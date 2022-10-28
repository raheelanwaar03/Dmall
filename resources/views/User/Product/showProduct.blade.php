@extends('User.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Dashboard</h1>
        </div>
    </div>
    </div>
@endsection

{{-- <div class="modal fade" id="QuickViewProduct">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
        <div class="modal-content rounded-0 border-0">
            <div class="modal-body">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="image-zoom-section">
                            <div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
                                <div class="item">
                                    <img src="{{ asset('images/' . $product->product_img) }}" class="img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="product-info-section p-3">
                            <h3 class="mt-3 mt-lg-0 mb-0">{{ $product->name }}</h3>
                            <div class="d-flex align-items-center mt-3 gap-2">
                                <h5 class="mb-0 text-decoration-line-through text-light-3">
                                    </h5>
                                <h4 class="mb-0">${{ $product->product_price }}</h4>
                            </div>
                            <div class="mt-3">
                                <h6>Discription :</h6>
                                <p class="mb-0">{{ $product->product_description }}.</p>
                            </div>
                            <dl class="row mt-3">
                                <dt class="col-sm-3">Product id</dt>
                                <dd class="col-sm-9">{{ $product->product_id }}</dd>
                            </dl>
                            <div class="row row-cols-auto align-items-center mt-3">
                                <div class="col">
                                    <label class="form-label">Quantity</label>
                                    <input type="integer" name="qty" min="0">
                                </div>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <a href="javascript:;" class="btn btn-dark btn-ecomm"> <i
                                        class="bx bxs-cart-add"></i>Add to Cart</a> <a href="javascript:;"
                                    class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to
                                    Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
