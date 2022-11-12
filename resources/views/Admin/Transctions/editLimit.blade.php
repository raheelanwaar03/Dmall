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
                    <form action="{{ route('Limit.update',$widthrawLimit->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Widthraw Limit{Min}</label>
                            <input type="text" name="widthraw_min" value="{{ $widthrawLimit->widthraw_min }}"  placeholder="Widthraw Limit{Min}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Widthraw Limit{Max}</label>
                            <input type="text" name="widthraw_max" value="{{ $widthrawLimit->widthraw_max }}" placeholder="Widthraw Limit{Max}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Rerferal Link Limit</label>
                            <input type="text" name="refer_limit" value="{{ $widthrawLimit->widthraw_max }}" placeholder="Rerferal Link Limit" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Shoping Commission</label>
                            <input type="text" name="commission_limit" value="{{ $widthrawLimit->commission_limit }}" placeholder="user will get commission on referal's shoping in %" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Commission</label>
                            <input type="text" name="referal_bouns" value="{{ $widthrawLimit->referal_bouns }}" placeholder="referal commission" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

@endsection
