<main class="page-content">
    <!-- Begin Account Page Area -->
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                @include('layouts.includes.account-navbar')
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <form action="#" class="quicky-form">
                            <div class="quicky-form-inner">
                                <div class="single-input">
                                    <label for="account-details-newpass">Password Baru</label>
                                    <input type="password" id="account-details-newpass">
                                </div>
                                <div class="single-input">
                                    <label for="account-details-confpass">Konfirmasi Password</label>
                                    <input type="password" id="account-details-confpass">
                                </div>
                                <div class="single-input">
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