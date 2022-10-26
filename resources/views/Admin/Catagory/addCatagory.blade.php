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
                        Add New Catagory
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('Catagory.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Catagory Name</label>
                            <input type="text" name="catagory_name" placeholder="catagory Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Catagory Description</label>
                            <textarea name="catagory_des" class="form-control" cols="10" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Catagory Image</label>
                            <input type="file" name="catagory_img" placeholder="catagory Image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Catagory</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

@endsection
