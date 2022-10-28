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
                                    <h6 class="mb-4">The following addresses will be used on the checkuot page by default.
                                    </h6>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-3">Billing Addresses</h5>
                                            <address>
                                               Cash ON Delivery
                                            </address>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="mb-3">Shipping Addresses</h5>
                                            <address>
                                                @forelse ( $userAddress as $address )
                                             city:  {{ $address->user_city }}<br> <br>
                                              area:  {{ $address->user_area }}<br><br>
                                               street: {{ $address->user_street }} <br><br>
                                               zip: {{ $address->user_zip }}<br>
                                                Pakistan <br>
                                                <div class="mt-4">
                                                    <a href="{{ route('User.Address.Edit',['id'=>$address->id]) }}" class="btn btn-warning">Edit Address</a>
                                                </div>
                                                @empty
                                                    <h3>Please Add your Address</h3>
                                                @endforelse
                                            </address>
                                        </div>
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
@endsection
@section('pageName')
    Addresses
@endsection
