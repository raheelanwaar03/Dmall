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
                    <h3 class="text-center text-primary">
                        Add New Product
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="product_name" placeholder="Product Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Product Image</label>
                        <input type="file" name="product_img" placeholder="Product Image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Product Description</label>
                        <input type="text" name="product_description" placeholder="Product Description" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

@endsection
