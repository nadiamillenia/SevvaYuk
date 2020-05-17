@extends('layouts.app')

@section('content')
<div class="login-register_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Reset Password</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label for="email">Email*</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 mb--20">
                                <label>Password*</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 mb--20">
                                <label>Konfirmasi Password*</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
                            </div>
                            <div class="col-md-12">
                                <button class="login_btn" type="submit">Reset</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="token" value="{{ $token }}">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
