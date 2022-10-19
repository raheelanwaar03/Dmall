@extends('Admin.layout.app')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-title">
                    <h3 class="text-center text-primary mt-3">
                        Add New Product
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('Limit.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Widthraw Limit{Min}</label>
                            <input type="text" name="widthraw_min" placeholder="Product Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Widthraw Limit{Max}</label>
                            <input type="text" name="widthraw_max" placeholder="Product Name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Set limit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

@endsection
