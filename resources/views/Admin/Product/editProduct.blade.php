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
                        Edit Product
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('Product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="product_name" value="{{ $product->product_name }}" placeholder="Product Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Description</label>
                            <textarea name="product_description" class="form-control" cols="30" rows="10">
                                {{ $product->product_description }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Product Price</label>
                            <input type="text" name="product_price" value="{{ $product->product_price }}" placeholder="Product Price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Image</label>
                            <input type="file" name="product_img" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
