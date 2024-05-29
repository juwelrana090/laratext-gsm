@extends('layouts.backend.auth_master')

@section('content')
<div class="row m-0">
    <div class="col-lg-6 d-lg-block d-none text-center align-self-center p-0">
        <img src="{{asset('Backend/app-assets/images/pages/reset-password.png')}}" alt="branding logo">
    </div>
    <div class="col-lg-6 col-12 p-0">
        <div class="card rounded-0 mb-0 px-2">
            <div class="card-header pb-1">
                <div class="card-title">
                    <h4 class="mb-0">Reset Password</h4>
                </div>
            </div>
            <p class="px-2">Please enter your new password.</p>
            <div class="card-content">
                <div class="card-body pt-1">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <fieldset class="form-label-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            <label for="user-email">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>

                        <fieldset class="form-label-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <label for="user-password">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </fieldset>

                        <fieldset class="form-label-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <label for="user-confirm-password">Confirm Password</label>
                        </fieldset>
                        <div class="row pt-2">
                            <div class="col-12 col-md-6 mb-1">
                                <a href="{{url('/login')}}" class="btn btn-outline-primary btn-block px-0">Go Back to Login</a>
                            </div>
                            <div class="col-12 col-md-6 mb-1">
                                <button type="submit" class="btn btn-primary btn-block px-0">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
