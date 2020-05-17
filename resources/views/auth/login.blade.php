@extends('layouts.app')

@section('content')
<div class="login-register_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Masuk</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label for="email">Email*</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 mb--20">
                                <label>Password*</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-8">
                                <div class="check-box">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Ingat saya</label>
                                </div>
                            </div>
                            <div class="col-md-4" style="text-align: right">
                                @if (Route::has('password.request'))
                                    <div class="forgotton-password_info">
                                        <a href="{{ route('password.request') }}"> Lupa password?</a>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <button class="login_btn" type="submit">Masuk</button>
                            </div>
                            <div class="col-md-12">
                                <br />
                                <p class="forgotton-password_info">Belum punya akun? <a href="{{ route('register') }}">Daftar Sekarang</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
