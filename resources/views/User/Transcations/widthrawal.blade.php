@extends('User.layout.app')
@section('content')

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->username }}</span>
                        <img class="img-profile rounded-circle"
                            src="{{ asset('assets/img/undraw_profile.svg') }}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            {{-- Write your main content here --}}
            <div class="card">
                <div class="card-title">
                    <h1 class="text-center mt-3">Widthraw Your Referal Commission!</h1>
                    <p class="text-center mt-4">Your Account balance is {{ $user->referal_bouns }}</p>
                </div>
                <div class="card-body">
                    <form action="{{ route('User.Widthrawal.Amount.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="text" name="widthrawal_Amount" class="form-control"
                                placeholder="Enter your Desired Amount!">
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
                            <input type="text" name="widthrawal_bank_Account" class="form-control"
                                placeholder="like: 031*******5 or 09*********38">
                        </div>
                        <div class="form-group">
                            <label for="">Account Name</label>
                            <input type="text" name="user_bank_Name" class="form-control"
                                placeholder="Your Name Which You gave to Your Bank.">
                        </div>
                        <div class="form-group">
                            <label for="">Phone Number (optional)</label>
                            <input type="text" name="widthrawal_Pho_Nubmer" class="form-control"
                                placeholder="like: 031*******8">
                        </div>
                        <button type="submit" class="btn btn-secondary mt-3">Widthraw</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
</div>
</div>

@endsection
