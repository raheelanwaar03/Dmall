
<footer>
    <section class="py-5 border-top bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="footer-section1">
                        <h5 class="mb-4 text-uppercase fw-bold">Contact Info</h5>
                        <div class="address mb-3">
                            <h6 class="mb-0 text-uppercase fw-bold">Address</h6>
                            <p class="mb-0">123 Street Name, City, Australia</p>
                        </div>
                        <div class="phone mb-3">
                            <h6 class="mb-0 text-uppercase fw-bold">Phone</h6>
                            <p class="mb-0">Toll Free (123) 472-796</p>
                            <p class="mb-0">Mobile : +91-9910XXXX</p>
                        </div>
                        <div class="email mb-3">
                            <h6 class="mb-0 text-uppercase fw-bold">Email</h6>
                            <p class="mb-0">mail@example.com</p>
                        </div>
                        <div class="working-days mb-3">
                            <h6 class="mb-0 text-uppercase fw-bold">WORKING DAYS</h6>
                            <p class="mb-0">Mon - FRI / 9:30 AM - 6:30 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-section2">
                        <h5 class="mb-4 text-uppercase fw-bold">Categories</h5>
                        <ul class="list-unstyled">
                            @foreach ($catagorys as $catagory)
                            <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i>
                                    {{ $catagory->catagory_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- <div class="col">
                    <div class="footer-section3">
                        <h5 class="mb-4 text-uppercase fw-bold">Popular Tags</h5>
                        <div class="tags-box d-flex flex-wrap gap-2">
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Cloths</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Electronis</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Furniture</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Sports</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Men Wear</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Women Wear</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Laptops</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Formal Shirts</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Topwear</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Headphones</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Bottom Wear</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Bags</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Sofa</a>
                            <a href="javascript:;" class="btn btn-ecomm btn-outline-dark">Shoes</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col">
                    <div class="footer-section4">
                        <h5 class="mb-4 text-uppercase fw-bold">Stay informed</h5>
                        <div class="subscribe">
                            <input type="text" class="form-control" placeholder="Enter Your Email" />
                            <div class="mt-3 d-grid">
                                <a href="javascript:;" class="btn btn-dark btn-ecomm">Subscribe</a>
                            </div>
                            <p class="mt-3 mb-0">Subscribe to our newsletter to receive early discount offers,
                                updates and new products info.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-strip text-center py-3 border-top positon-absolute bottom-0">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row align-items-center gap-3 justify-content-between">
                <p class="mb-0">Copyright © 2022. All right reserved.</p>
                <div class="payment-icon">
                    <div class="row row-cols-auto g-2 justify-content-end">
                       <h3>We use cash on delivery system!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<div class="modal fade" id="QuickViewProduct">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
        <div class="modal-content rounded-0 border-0">
            <div class="modal-body">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="image-zoom-section">
                            <div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
                                <div class="item">
                                    <img src="{{ asset('assets/images/product-gallery/01.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/product-gallery/02.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/product-gallery/03.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/images/product-gallery/04.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                <button class="owl-thumb-item">
                                    <img src="{{ asset('assets/images/product-gallery/01.png') }}" class=""
                                        alt="">
                                </button>
                                <button class="owl-thumb-item">
                                    <img src="{{ asset('assets/images/product-gallery/02.png') }}" class=""
                                        alt="">
                                </button>
                                <button class="owl-thumb-item">
                                    <img src="{{ asset('assets/images/product-gallery/03.png') }}" class=""
                                        alt="">
                                </button>
                                <button class="owl-thumb-item">
                                    <img src="{{ asset('assets/images/product-gallery/04.png') }}" class=""
                                        alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="product-info-section p-3">
                            <h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
                            <div class="product-rating d-flex align-items-center mt-2">
                                <div class="rates cursor-pointer font-13"> <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
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
                                <p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection
                                    that continues to break away from the conventions of mainstream fashion.
                                    Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                            </div>
                            <dl class="row mt-3">
                                <dt class="col-sm-3">Product id</dt>
                                <dd class="col-sm-9">#BHU5879</dd>
                                <dt class="col-sm-3">Delivery</dt>
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
</div>
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
</div>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/OwlCarousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>
