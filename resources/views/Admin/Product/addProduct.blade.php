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
                        <form action="{{ route('Product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" name="product_name" placeholder="Product Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Product ID</label>
                                <input type="text" name="product_id" placeholder="Product Id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Product Price</label>
                                <input type="text" name="product_price" placeholder="Product Price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Product Discount</label>
                                <input type="text" name="product_discount" placeholder="Product Discount" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Product Category</label>
                                <select class="form-control" name="product_catagory" id="">
                                    @foreach ($catagorys as $catagory)
                                        <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Product Description</label>
                                <textarea name="product_description" id="textEditor" class="form-control" cols="15" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Product Quantity</label>
                                <input type="text" name="product_qty" placeholder="Product Quantity"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Product Image</label>
                                <input type="file" name="product_img" placeholder="Product Image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection


@section('editor')
<script>
    ClassicEditor
        .create( document.querySelector( '#textEditor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
