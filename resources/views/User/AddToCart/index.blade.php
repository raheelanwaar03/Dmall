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

                                        {{-- Write yor main content here --}}

                                        <div class="card-body">
                                            <h1>Cart Products</h1>
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
@endsection
@section('pageName')
    Add to Cart
@endsection
