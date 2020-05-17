<div class="col-lg-3">
    <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('account/profile') }}" aria-selected="false">Akun Saya</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('account/orders') }}" aria-selected="false">Pembelian</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('account/wishlist') }}" aria-selected="false">Wishlist</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('account/favorite-shop') }}" aria-selected="false">Toko Favorit</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('account/setting') }}" aria-selected="false">Pengaturan</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>                             
    </ul>
</div>