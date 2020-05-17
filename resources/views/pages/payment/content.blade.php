<div class="checkout-area">
    <div class="container">
        <form action="{{ url('checkout') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-12">
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
                                    @foreach ($order->details as $detail)
                                        <tr class="cart_item">
                                            <td class="cart-product-name"> {{ $detail->product->name }}<strong class="product-quantity">
                                            × {{ $detail->quantity }}</strong></td>
                                            <td class="cart-product-total"><span class="amount">@currency($detail->quantity * $detail->product->price)</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">@currency($order->amount)</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <input type="hidden" name="amount" value="{{ $carts->sum('total_price') }}">
                                        <td><strong><span class="amount">@currency($carts->amount)</span></strong></td>
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