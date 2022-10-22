@extends('Admin.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Rejected Transcations</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Widthrawal Amount</th>
                                        <th>Bank</th>
                                        <th>Bank Account</th>
                                        <th>Bank Username</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Widthrawal Amount</th>
                                        <th>Bank</th>
                                        <th>Bank Account</th>
                                        <th>Bank Username</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($userWidthrawalReqs as $widthrawal)
                                        <tr>
                                            <td>{{ $widthrawal->widthrawal_Amount }}</td>
                                            <td>{{ $widthrawal->widthrawal_bank }}</td>
                                            <td>{{ $widthrawal->widthrawal_bank_Account }}</td>
                                            <td>{{ $widthrawal->user_bank_Name }}</td>
                                            <td>{{ $widthrawal->status }}</td>
                                            <td>{{ $widthrawal->created_at }}</td>
                                            <td>
                                                <a href="{{ route('Admin.Make.Request.Approve',['id'=>$widthrawal->id]) }}" class="btn btn-danger">approved</a>
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

    </div>
    </div>
@endsection
