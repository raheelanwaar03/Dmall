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
    {{-- @include('User.Product.showProduct') --}}
</footer>
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
