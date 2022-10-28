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
                                    <form action="{{ route('User.Address.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="label">City</div>
                                            <input type="text" name="user_city" class="form-control"
                                                placeholder="@example Lohore">
                                        </div>
                                        <div class="form-group">
                                            <div class="label">Area</div>
                                            <input type="text" name="user_area" class="form-control"
                                                placeholder="@example Bahria Town">
                                        </div>
                                        <div class="form-group">
                                            <div class="label">Street</div>
                                            <input type="text" name="user_street" class="form-control"
                                                placeholder="The Street where you live">
                                        </div>
                                        <div class="form-group">
                                            <div class="label">zip (Optional)</div>
                                            <input type="text" name="user_zip" class="form-control"
                                                placeholder="Your area zip code">
                                        </div>
                                        <div class="form-group mt-2">
                                            <button style="border-radiun:5px" type="submit" class="btn btn-warning text-light">Enter</button>
                                        </div>
                                    </form>
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
    Add Address
@endsection
