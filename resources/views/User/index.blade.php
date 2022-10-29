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

                                        <div class="card-body">
                                            <p>Hello <strong>{{ auth()->user()->username }}</strong>
                                            <p>From your account dashboard you can view your Recent Orders,<br> manage your
                                                shipping and billing addesses.</p>
                                                <a href="{{ route('welcome') }}" class="btn btn-dark btn-ecomm">Continue Shoping</a>
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
    Dashboard
@endsection
{{-- <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Referal Commission</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ auth()->user()->referal_bouns }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pending Widthrawal
                                Amount
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow bordered-primary mb-4">
                <div>
                    <input type="text" style="width: 90%;border:none" value="{{ route('register', ['referal' => Auth::user()->username]) }}"
                        id="myInput">
                    <button onclick="myFunction()" class="btn btn-secondary px-2"><i class="fa fa-clipboard"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4 class="small font-weight-bold">Referal<span class="float-right">Complete!</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div> --}}
{{--
@section('footer')
    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the Link: " + copyText.value);
        }
    </script>
@endsection --}}
