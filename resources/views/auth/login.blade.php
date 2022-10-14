@extends('auth.auth_layout.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Sign in</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="">
                <div class="container">
                    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5">
                        <div class="row row-cols-1 row-cols-xl-2">
                            <div class="col mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="border p-4 rounded">
                                            <div class="text-center">
                                                <h3 class="">Sign in</h3>
                                                <p>Don't have an account yet? <a href="{{ route('register') }}">Sign up
                                                        here</a>
                                                </p>
                                            </div>
                                            <div class="form-body">
                                                <form class="row g-3">
                                                    <div class="col-12">
                                                        <label for="inputEmailAddress" class="form-label">Email
                                                            Address</label>
                                                        <input type="email" class="form-control" id="inputEmailAddress"
                                                            placeholder="Email Address">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputChoosePassword" class="form-label">Enter
                                                            Password</label>
                                                        <div class="input-group" id="show_hide_password">
                                                            <input type="password" class="form-control border-end-0"
                                                                id="inputChoosePassword" value="12345678"
                                                                placeholder="Enter Password"> <a href="javascript:;"
                                                                class="input-group-text bg-transparent"><i
                                                                    class='bx bx-hide'></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="flexSwitchCheckChecked" checked>
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckChecked">Remember Me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-dark"><i
                                                                    class="bx bxs-lock-open"></i>Sign in</button>
                                                        </div>
                                                    </div>
                                                </form>
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
