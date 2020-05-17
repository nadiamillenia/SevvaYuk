<header class="main-header_area-2">
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header_nav position-relative">
                        <div class="header-logo_area">
                            <a href="{{ url('/') }}">
                                <!-- <img src="{{ asset('images/menu/logo/1.png') }}" alt="Header Logo"> -->
                                <h3>Sevva Yuk</h3>
                            </a>
                        </div>
                        <div class="main-menu_area d-none d-lg-block">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="mh-sticker_wrap">
                                        <span class="mh-sticker">SALE</span>
                                        <a href="{{ url('shop') }}">Belanja Sekarang</a>
                                    </li>
                                    <li><a href="{{ url('contact') }}">Hubungi Kami</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right_area">
                            <ul>
                                <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                        <i class="zmdi zmdi-menu"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#searchBar" class="search-btn toolbar-btn">
                                        <i class="zmdi zmdi-search"></i>
                                    </a>
                                </li>
                                <li class="mr-md_0">
                                    <a href="{{ url('cart') }}">
                                        <!-- <div class="minicart-count_area"> -->
                                            <i class="zmdi zmdi-mall"></i>
                                            <!-- <p class="total-price"><span></span></p> -->
                                        <!-- </div> -->
                                    </a>
                                </li>
                                <li class="dropdown-holder user-setting_wrap"><a href="javascript:void(0)"><i class="zmdi zmdi-account-o"></i></a>
                                    <ul class="quicky-dropdown">
                                        @guest
                                            @if (Route::has('register'))
                                                <li class="position-relative"><a href="{{ route('register') }}">Daftar Sekarang</a></li>
                                            @endif
                                            <li class="position-relative"><a href="{{ route('login') }}">Masuk</a></li>
                                        @else
                                            <li class="position-relative"><a href="{{ url('account/profile') }}">Akun Saya</a></li>
                                            <li class="position-relative"><a href="{{ url('account/orders') }}">Pembelian</a></li>
                                            <li class="position-relative"><a href="{{ url('account/wishlist') }}">Wishlist</a></li>
                                            <li class="position-relative"><a href="{{ url('account/favorite-shop') }}">Toko Favorit</a></li>
                                            <li class="position-relative"><a href="{{ url('account/setting') }}">Pengaturan</a></li>
                                            <li class="position-relative">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Keluar
                                                </a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endguest
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header_nav position-relative">
                        <div class="header-logo_area">
                            <a href="{{ url('/') }}">
                                <!-- <img src="{{ asset('images/menu/logo/1.png') }}" alt="Header Logo"> -->
                                <h3>Sevva Yuk</h3>
                            </a>
                        </div>
                        <div class="main-menu_area d-none d-lg-block">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="mh-sticker_wrap">
                                        <span class="mh-sticker">SALE</span>
                                        <a href="{{ url('shop') }}">Belanja Sekarang</a>
                                    </li>
                                    <li><a href="{{ url('contact') }}">Hubungi Kami</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right_area">
                            <ul>
                                <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                        <i class="zmdi zmdi-menu"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#searchBar" class="search-btn toolbar-btn">
                                        <i class="zmdi zmdi-search"></i>
                                    </a>
                                </li>
                                <li class="mr-md_0">
                                    <a href="{{ url('cart') }}">
                                        <!-- <div class="minicart-count_area"> -->
                                            <i class="zmdi zmdi-mall"></i>
                                            <!-- <p class="total-price"><span></span></p> -->
                                        <!-- </div> -->
                                    </a>
                                </li>
                                <li class="dropdown-holder user-setting_wrap"><a href="javascript:void(0)"><i class="zmdi zmdi-account-o"></i></a>
                                    <ul class="quicky-dropdown">
                                        @guest
                                            @if (Route::has('register'))
                                                <li class="position-relative"><a href="{{ route('register') }}">Daftar Sekarang</a></li>
                                            @endif
                                            <li class="position-relative"><a href="{{ route('login') }}">Masuk</a></li>
                                        @else
                                            <li class="position-relative"><a href="{{ url('account/profile') }}">Akun Saya</a></li>
                                            <li class="position-relative"><a href="{{ url('account/orders') }}">Pembelian</a></li>
                                            <li class="position-relative"><a href="{{ url('account/wishlist') }}">Wishlist</a></li>
                                            <li class="position-relative"><a href="{{ url('account/favorite-shop') }}">Toko Favorit</a></li>
                                            <li class="position-relative"><a href="{{ url('account/setting') }}">Pengaturan</a></li>
                                            <li class="position-relative">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Keluar
                                                </a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endguest
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="zmdi zmdi-close"></i></a>
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4>Shopping Cart</h4>
                </div>
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                            class="zmdi zmdi-close"></i></a>
                        <div class="product-item_img">
                            <img src="{{ asset('images/product/small-size/1.jpg') }}" alt="Quicky's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Autem ipsa ad</a>
                            <span class="product-item_quantity">1 x $145.80</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                            class="zmdi zmdi-close"></i></a>
                        <div class="product-item_img">
                            <img src="{{ asset('images/product/small-size/2.jpg') }}" alt="Quicky's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Tenetur illum
                                amet</a>
                            <span class="product-item_quantity">1 x $150.80</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                            class="zmdi zmdi-close"></i></a>
                        <div class="product-item_img">
                            <img src="{{ asset('images/product/small-size/3.jpg') }}" alt="Quicky's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Non doloremque</a>
                            <span class="product-item_quantity">1 x $165.80</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="minicart-item_total">
                <span>Subtotal</span>
                <span class="ammount">$462.4‬0</span>
            </div>
            <div class="minicart-btn_area">
                <a href="cart.html" class="quicky-btn-2 quicky-btn_fullwidth square-btn">Minicart</a>
            </div>
            <div class="minicart-btn_area">
                <a href="checkout.html" class="quicky-btn-2 quicky-btn_fullwidth square-btn">Checkout</a>
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close white-close_btn"><i class="zmdi zmdi-close"></i></a>
                <div class="offcanvas-inner_logo">
                    <a href="{{ url('/') }}">
                        <!-- <img src="{{ asset('images/menu/logo/1.png') }}" alt="Header Logo"> -->
                        <h3>Sevva Yuk</h3>
                    </a>
                </div>
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="{{ url('/') }}"><span class="mm-text">Home</span></a></li>
                        <li class="menu-item-has-children"><a href="{{ url('shop') }}"><span class="mm-text">Belanja</span></a></li>
                        <li class="menu-item-has-children"><a href="{{ url('contact') }}"><span class="mm-text">Hubungi Kami</span></a></li>
                    </ul>
                </nav>
                <nav class="offcanvas-navigation user-setting_area">
                    <ul class="mobile-menu">
                        @guest
                            @if (Route::has('register'))
                                <li class="menu-item-has-children"><a href="{{ route('register') }}"><span class="mm-text">Daftar Sekarang</span></a></li>
                            @endif
                            <li class="menu-item-has-children"><a href="{{ route('login') }}"><span class="mm-text">Masuk</span></a></li>
                        @else
                            <li class="menu-item-has-children"><a href="{{ url('account/profile') }}"><span class="mm-text">Akun Saya</span></a></li>
                            <li class="menu-item-has-children"><a href="{{ url('account/orders') }}"><span class="mm-text">Pembelian</span></a></li>
                            <li class="menu-item-has-children"><a href="{{ url('account/wishlist') }}"><span class="mm-text">Wishlist</span></a></li>
                            <li class="menu-item-has-children"><a href="{{ url('account/favorite-shop') }}"><span class="mm-text">Toko Favorit</span></a></li>
                            <li class="menu-item-has-children"><a href="{{ url('account/setting') }}"><span class="mm-text">Pengaturan</span></a></li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="mm-text">Keluar</span>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="offcanvas-menu_wrapper" id="offcanvasMenu">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="zmdi zmdi-close"></i></a>
            <div class="offcanvas-inner_logo">
                <a href="shop-left-sidebar.html">
                    <img src="{{ asset('images/menu/logo/1.png') }}" alt="Munoz's Offcanvas Logo">
                </a>
            </div>
            <div class="short-desc">
                <p>We are a team of designers and developers that create high quality HTML Template &
                    Woocommerce,
                    Shopify Themes.
                </p>
            </div>
            <div class="offcanvas-component first-child">
                <span class="offcanvas-component_title">Currency</span>
                <ul class="offcanvas-component_menu">
                    <li><a href="javascript:void(0)">EUR</a></li>
                    <li><a href="javascript:void(0)">GBP</a></li>
                    <li class="active"><a href="javascript:void(0)">USD</a></li>
                </ul>
            </div>
            <div class="offcanvas-component">
                <span class="offcanvas-component_title">Language</span>
                <ul class="offcanvas-component_menu">
                    <li class="active"><a href="javascript:void(0)">English</a></li>
                    <li><a href="javascript:void(0)">French</a></li>
                </ul>
            </div>
            <div class="offcanvas-component">
                <span class="offcanvas-component_title">My Account</span>
                <ul class="offcanvas-component_menu">
                    <li><a href="my-account.html">Register</a></li>
                    <li><a href="login-register.html">Login</a></li>
                </ul>
            </div>
            <div class="offcanvas-inner-social_link">
                <div class="quicky-social_link">
                    <ul>
                        <li class="facebook">
                            <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank" title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li class="youtube">
                            <a href="https://www.youtube.com" data-toggle="tooltip" target="_blank" title="Youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="google-plus">
                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                <i class="fab fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="instagram">
                            <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-search_wrapper" id="searchBar">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="zmdi zmdi-close"></i></a>
                <!-- Begin Offcanvas Search Area -->
                <div class="offcanvas-search">
                    <form action="{{ url('search') }}" method="get" class="hm-searchbox">
                        <input type="text" name="search" placeholder="Search for item...">
                        <button class="search_btn" type="submit"><i class="zmdi zmdi-search"></i></button>
                    </form>
                </div>
                <!-- Offcanvas Search Area End Here -->
            </div>
        </div>
    </div>
    <div class="global-overlay"></div>
</header>