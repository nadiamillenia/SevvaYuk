<main class="page-content">
    <!-- Begin Account Page Area -->
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                @include('layouts.includes.account-navbar')
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ url('account/update/'. $user->id) }}" method="post" class="quicky-form">
                            @csrf
                            <div class="quicky-form-inner">
                                <div class="single-input">
                                    <label for="account-details-firstname">Nama Lengkap*</label>
                                    <input type="text" name="name" value="{{ $user->name }}" id="account-details-firstname">
                                </div>
                                <div class="single-input">
                                    <label for="account-details-email">Email*</label>
                                    <input type="email" value="{{ $user->email }}" id="account-details-email" disabled>
                                </div>
                                <div class="single-input">
                                    <input type="hidden" name="_method" value="patch">
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