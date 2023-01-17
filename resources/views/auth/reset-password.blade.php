@extends('auth.auth_layout.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Don't worry we are here to help you!</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i>
                                            Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Authentication</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="">
                <div class="container">
                    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5">
                        <div class="row">
                            <div class="col-sm-8 mx-auto">
                                <div class="col-sm-12 mx-auto">
                                    <a href="{{ route('welcome') }}"
                                        class="d-flex justify-content-center align-items-center">
                                        <img src="{{ asset('assets/images/logo-icon.png') }}" class="img-thumbnail"
                                            height="200px" width="200px" alt="logo">
                                    </a>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="border p-4 rounded">
                                            <div class="mb-4 text-sm text-gray-600">
                                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                            </div>
                                            <div class="form-body">
                                                <form method="POST" action="{{ route('password.update') }}">
                                                    @csrf

                                                    <!-- Password Reset Token -->
                                                    <input type="hidden" name="token"
                                                        value="{{ $request->route('token') }}">

                                                    <!-- Email Address -->
                                                    <div>
                                                        <div class="form-group">
                                                            <label for="">Please Give Your Verified Email</label>
                                                            <input type="email" name="email" id="email"
                                                                class="form-control" >
                                                        </div>
                                                    </div>

                                                    <!-- Password -->
                                                    <div class="mt-4">
                                                        <div class="form-group">
                                                            <label for="">New Password</label>
                                                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your New Password" req>
                                                        </div>

                                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                    </div>

                                                    <!-- Confirm Password -->
                                                    <div class="mt-4">
                                                        <div class="form-group">
                                                            <label for="">Confirm Your Password</label>
                                                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="confrim your password" required>
                                                        </div>
                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                    </div>
                                                    <button type="submit" class="btn btn-block btn-warning mt-3" style="color: white;font-size:20px">Reset Password</button>
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
