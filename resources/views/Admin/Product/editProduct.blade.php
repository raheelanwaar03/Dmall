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
                            <label for="">Product Id</label>
                            <input type="text" name="product_id" value="{{ $product->product_id }}" placeholder="Product Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Price</label>
                            <input type="text" name="product_price" value="{{ $product->product_price }}" placeholder="Product Price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Discount Price</label>
                            <input type="text" name="product_discount" value="{{ $product->product_discount }}" placeholder="No Discount Given on this Product" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Quantity</label>
                            <input type="text" name="product_qty" value="{{ $product->product_qty }}" placeholder="Product Price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Catagory</label>
                            <select name="product_catagory" class="form-control">
                                @foreach ($catagorys as $catagory)
                                <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Product Description</label>
                            <textarea name="product_description" class="form-control" cols="30" rows="10">
                                {{ $product->product_description }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Product Image</label>
                            <input type="file" name="product_img" value="{{ $product->product_img }}" class="form-control">
                        </div>
                        <div class="my-3">
                            <img src="{{ asset('images/'. $product->product_img) }}" alt="product img" width="200px" height="200px">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
