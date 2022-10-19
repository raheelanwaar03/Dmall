@extends('User.layout.app')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-title">
                        <h1 class="text-center text-primary mt-3">Widthraw Amout!</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('User.Widthrawal.Amount.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="text" name="widthrawal_Amount" class="form-control" placeholder="Enter your Desired Amount!">
                            </div>
                            <div class="form-group">
                                <label for="">Bank</label>
                                <select name="widthrawal_bank" class="form-control" id="method">
                                    <option value="easypaisa">Easypaisa</option>
                                    <option value="JazzCash">JazzCash</option>
                                    <option value="bank">Bank</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Account To Be Funded!</label>
                                <input type="text" name="widthrawal_bank_Account" class="form-control" placeholder="like: 031*******5 or 09*********38">
                            </div>
                            <div class="form-group">
                                <label for="">Account Name</label>
                                <input type="text" name="user_bank_Name" class="form-control" placeholder="Your Name Which You gave to Your Bank.">
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number (optional)</label>
                                <input type="text" name="widthrawal_Pho_Nubmer" class="form-control" placeholder="like: 031*******8">
                            </div>
                            <button type="submit" class="btn btn-warning">Widthraw</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
