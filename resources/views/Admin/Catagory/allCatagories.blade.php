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
                        <h6 class="m-0 font-weight-bold text-primary">catagory Details</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Catagory Id</th>
                                        <th>Catagory Name</th>
                                        <th>Catagory Description</th>
                                        <th>Catagory Image</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Catagory Id</th>
                                        <th>Catagory Name</th>
                                        <th>Catagory Description</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($catagorys as $catagory)
                                        <tr>
                                            <td>{{ $catagory->id }}</td>
                                            <td>{{ $catagory->catagory_name }}</td>
                                            <td>{{ $catagory->catagory_description }}</td>
                                            <td>
                                                {{ $catagory->catagory_img }}
                                                <img src="{{ asset('images/' . $catagory->catagory_img) }}" height="90px"
                                                    width="90px" class="img-fluid img-thumbnail" alt="catagory_img">
                                            </td>
                                            <td>{{ $catagory->created_at }}</td>
                                            <td>
                                                <a href="{{ route('Catagory.show', $catagory->id) }}"
                                                    class="btn btn-primary">show</a>
                                                {{-- <a href="{{ route('catagory.edit',['catagory'=> $catagory->id]) }}"
                                                    class="btn btn-info">Edit</a>
                                                <form action="{{ route('catagory.destroy', $catagory->id) }}" method="POST"
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
