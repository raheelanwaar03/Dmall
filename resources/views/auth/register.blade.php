@extends('auth.auth_layout.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Sign Up</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-0 py-lg-5">
                <div class="container">
                    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5">
                        <div class="row row-cols-1 row-cols-lg-1 row-cols-xl-2">
                            <div class="col mx-auto">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="border p-4 rounded">
                                            <div class="text-center">
                                                <h3 class="">Sign Up</h3>
                                                <p>Already have an account? <a href="{{ route('login') }}">Sign in
                                                        here</a>
                                                </p>
                                            </div>
                                            <div class="form-body">
                                                <form action="{{ route('register') }}" method="POST" class="row g-3">
                                                    @csrf
                                                    <div class="col-sm-12">
                                                        <label for="inputFirstName" class="form-label">Username</label>
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Jhon">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputEmailAddress" class="form-label">Email
                                                            Address</label>
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="example@user.com">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                                        <div class="input-group" id="show_hide_password">
                                                            <input type="password" name="password"
                                                                class="form-control border-end-0"
                                                                placeholder="Enter Password">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="inputChoosePassword" class="form-label">Confirm
                                                            Password</label>
                                                        <div class="input-group" id="show_hide_password">
                                                            <input type="password" name="password_confirmation"
                                                                class="form-control border-end-0"
                                                                placeholder="Confirm Password">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-dark"><i
                                                                    class='bx bx-user'></i>Sign up</button>
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
