@extends('frontend.layouts.app')
@section('title')
    Home
@endsection
@section('content')

        <!-- Start Register
		============================================= -->
        <div class="reg-area bg de-padding mt-100">
            <div class="container">
                <div class="reg-wpr">
                    <div class="login-form">
                        <i class="header-icon">
                            <img src="assets/img/logo/logo.png" alt="MaanSoft">
                        </i>
                        <h4 class="register-title mb-50">Login</h4>
                        @if(session('success')) <p>{{ session('success') }}</p> @endif
                        <form action="{{ route('login') }}" method="POST" class="row g-5">
                            @csrf
                            <div class="col-md-12">
                                <input type="text" name="email" class="form-control input-style-2" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <input type="password" name="password" class="form-control input-style-2" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="rs-ps"><span>Reset Password</span></a>
                            </div>
                            <div class="col-12">
                                <div class="login-btns">
                                    <button type="submit" class="btn-6 login-btn">
                                        Login
                                    </button>
                                    <span class="reg-acc">
                                        Don't Have an Account <a href="{{ route('signup') }}">Sign Up</a>?
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Register -->
@endsection

