@extends('layouts.backend.auth_master')

@section('content')

    <div class="row m-0">
        <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
            <img src="{{ asset('Backend/app-assets/images/pages/login.png') }}" alt="branding logo">
        </div>
        <div class="col-lg-6 col-12 p-0">
            <div class="card rounded-0 mb-0 px-2">
                <div class="card-header pb-1">
                    <div class="card-title">
                        <h4 class="mb-0">Login</h4>
                    </div>
                </div>
                <p class="px-2">Welcome back, please login to your account.</p>
                <div class="card-content">
                    <div class="card-body pt-1">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="form-control-position">
                                    <i class="feather icon-user"></i>
                                </div>
                                <label for="user-name">{{ __('E-Mail Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>

                            <fieldset class="form-label-group position-relative has-icon-left">
                                <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                <div class="form-control-position">
                                    <i class="feather icon-lock"></i>
                                </div>
                                <label for="user-password">Password</label>
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </fieldset>
                            <div class="form-group d-flex justify-content-between align-items-center">
                                <div class="text-left">
                                    <fieldset class="checkbox">
                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">Remember me</span>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="text-right"><a href="{{ route('password.request') }}" class="card-link">Forgot
                                        Password?</a></div>
                            </div>
                            {{-- <a href="{{url('/register')}}" class="btn btn-outline-primary float-left btn-inline">Register</a> --}}
                            <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                        </form>
                    </div>
                </div>
                <div class="login-footer mb-2">
                    {{-- <div class="divider">
                        <div class="divider-text">OR</div>
                    </div>
                    <div class="footer-btn d-inline">
                        <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                        <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
