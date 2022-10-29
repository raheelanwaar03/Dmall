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
                                <div class="col-lg-12">
                                    <div class="card shadow-none mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Item Price</th>
                                                            <th>Order Price</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($orderProduct as $product)
                                                        <tr>
                                                            <td>{{ $product->consign_num }}</td>
                                                            <td>{{ $product->created_at }}</td>
                                                            <td>
                                                                <div class="badge rounded-pill bg-primary w-100">
                                                                    {{ $product->status }}</div>
                                                            </td>
                                                            <td>{{ $product->item_price }} for 1 item</td>
                                                            <td>{{ $product->order_price }}</td>
                                                            <td>
                                                                <div class="d-flex gap-2"> <a href="javascript:;"
                                                                        class="btn btn-dark btn-sm rounded-0">View</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                            <h5>You have not Placed any Order yet</h5>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
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
    Address
@endsection
