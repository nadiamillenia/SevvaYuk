<main class="page-content">
    <!-- Begin Account Page Area -->
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                @include('layouts.includes.account-navbar')
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <form action="{{ route('password.update') }}" method="post" class="quicky-form">
                            @csrf
                            <div class="quicky-form-inner">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="single-input">
                                    <label for="account-details-newpass">Password Baru</label>
                                    <input type="password" id="account-details-newpass">
                                </div>
                                <div class="single-input">
                                    <label for="account-details-confpass">Konfirmasi Password</label>
                                    <input type="password" id="account-details-confpass">
                                </div>
                                <div class="single-input">
                                    <input type="hidden" name="email" value="{{ $user->email }}">
                                    <button class="quicky-btn-2" type="submit"><span>Simpan</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Page Area End Here -->
</main>