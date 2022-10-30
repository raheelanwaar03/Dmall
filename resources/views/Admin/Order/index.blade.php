@extends('Admin.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
            <div>
                <a href="{{ route('Admin.Order.Delivered.Users') }}" class="btn btn-primary">Delivered Orders</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All Orders</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Consign_Num</th>
                                        <th>Product Id</th>
                                        <th>Name</th>
                                        <th>Item Price</th>
                                        <th>Qty</th>
                                        <th>Order Price</th>
                                        <th>Image</th>
                                        <th>Date & Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Consign_Num</th>
                                        <th>Product Id</th>
                                        <th>Name</th>
                                        <th>Item Price</th>
                                        <th>Qty</th>
                                        <th>Order Price</th>
                                        <th>Image</th>
                                        <th>Date & Time</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($orderProduct as $product)
                                        <tr>
                                            <td>{{ $product->consign_num }}</td>
                                            <td>{{ $product->product_id }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->item_price }}</td>
                                            <td>{{ $product->product_qty }}</td>
                                            <td>{{ $product->order_price }}</td>
                                            <td>
                                                <img src="{{ asset('images/' . $product->product_img) }}" height="90px"
                                                    width="90px" class="img-fluid img-thumbnail" alt="product_img">
                                            </td>
                                            <td>{{ $product->created_at }}</td>
                                            <td>
                                                <a href="{{ route('Admin.Order.Deliver', $product->id) }}"
                                                    class="btn btn-primary">Deliver</a>
                                                {{-- <a href="{{ route('Product.edit',['Product'=> $product->id]) }}"
                                                    class="btn btn-info">Edit</a>
                                                <form action="{{ route('Product.destroy', $product->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')"  class="btn btn-danger">Delete</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
