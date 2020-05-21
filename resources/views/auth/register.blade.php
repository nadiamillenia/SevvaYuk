@extends('layouts.app')

@section('content')
<div class="login-register_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="login-form">
                        <h4 class="login-title">Daftar Akun</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label for="name">Nama Lengkap*</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 col-12">
                                <label for="noktp">Nomor KTP*</label>
                                <input id="nnoktp" type="text" class="form-control @error('noktp') is-invalid @enderror" name="noktp" value="{{ old('noktp') }}" placeholder="Nomor KTP" required autocomplete="noktp" autofocus>

                                @error('noktp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 col-12">
                                <label for="notelp">Nomor Telpon*</label>
                                <input id="notelp" type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ old('notelp') }}" placeholder="Nomor Telpon" required autocomplete="noktp" autofocus>

                                @error('notelp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 col-12">
                                <label for="username">Username*</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 col-12">

                                <label for="email">Email*</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
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
                                <button class="login_btn" type="submit">Daftar</button>
                            </div>
                            <div class="col-md-12">
                                <br />
                                <p class="forgotton-password_info">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
