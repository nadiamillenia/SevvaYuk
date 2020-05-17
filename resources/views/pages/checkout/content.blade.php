<div class="checkout-area">
    <div class="container">
        <form action="{{ url('checkout') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="checkbox-form">
                        <h3>Detail Penagihan dan Pengiriman</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Nama Lengkap <span class="required">*</span></label>
                                    <input placeholder="John Doe" name="recipient_name" type="text" required autofocus>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Alamat <span class="required">*</span></label>
                                    <input placeholder="Jl. Imam Bonjol 15" name="recipient_address" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Kota / Kabupaten <span class="required">*</span></label>
                                    <input placeholder="Surabaya" name="recipient_city" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Provinsi <span class="required">*</span></label>
                                    <input placeholder="Jawa Timur" name="recipient_province" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Kode Pos <span class="required">*</span></label>
                                    <input placeholder="60001" name="recipient_postalcode" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Nomor HP <span class="required">*</span></label>
                                    <input placeholder="08123456789" name="recipient_phone" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="order-notes">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Catatan Pembelian</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Catatan tambahan jika diperlukan" name="note"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Pesanan Anda</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Daftar Produk</th>
                                        <th class="cart-product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $cart)
                                        <tr class="cart_item">
                                            <td class="cart-product-name"> {{ $cart->product->name }}<strong class="product-quantity">
                                            × {{ $cart->quantity }}</strong></td>
                                            <td class="cart-product-total"><span class="amount">@currency($cart->quantity * $cart->product->price)</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">@currency($carts->sum('total_price'))</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <input type="hidden" name="amount" value="{{ $carts->sum('total_price') }}">
                                        <td><strong><span class="amount">@currency($carts->sum('total_price'))</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="order-button-payment">
                                    <input value="Bayar Pesanan" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>