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
                        Set Widthraw Limit
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('Limit.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Widthraw Limit{Min}</label>
                            <input type="text" name="widthraw_min"  placeholder="Widthraw Limit {min}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Widthraw Limit{Max}</label>
                            <input type="text" name="widthraw_max" placeholder="Widthraw Limit {max}" class="form-control">
                        </div>
                         <div class="form-group">
                            <label for="">Referal Link Limit</label>
                            <input type="text" name="refer_limit" placeholder="Enter Referal Link Limit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Commission</label>
                            <input type="text" name="referal_bouns" placeholder="Product Name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Set Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Applied Limit</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Minimum Amount</th>
                                    <th>Maximum Amount</th>
                                    <th>Referal Link Limit</th>
                                    <th>Referal Commission</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Minimum Amount</th>
                                    <th>Maximum Amount</th>
                                    <th>Referal Link Limit</th>
                                    <th>Referal Commission</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @forelse ( $widthrawLimits as $widthrawLimit)
                                <tr>
                                    <td>{{ $widthrawLimit->widthraw_min }}</td>
                                    <td>{{ $widthrawLimit->widthraw_max }}</td>
                                    <td>{{ $widthrawLimit->refer_limit }}</td>
                                    <td>{{ $widthrawLimit->referal_bouns }}</td>
                                    <td>{{ $widthrawLimit->created_at }}</td>
                                    <td>
                                        <a href="{{ route('Limit.edit',['Limit'=>$widthrawLimit->id]) }}" class="btn btn-primary">Change Settings</a>
                                    </td>
                                </tr>
                                @empty
                                    <h1>No limit Applied Yet</h1>
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

@endsection
