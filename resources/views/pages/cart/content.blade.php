<div class="quicky-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="quicky-product-remove">Hapus</th>
                                <th class="quicky-product-thumbnail">Gambar</th>
                                <th class="cart-product-name">Produk</th>
                                <th class="quicky-product-price">Harga</th>
                                <th class="quicky-product-quantity">Kuantitas</th>
                                <th class="quicky-product-subtotal">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                                <tr>
                                    <td class="quicky-product-remove">
                                        <a href="{{ url('cart/'. $cart->id) }}" onclick="event.preventDefault(); document.getElementById('remove-cart-' + <?php echo $cart->id ?>).submit();">
                                            <i class="zmdi zmdi-close"title="Remove"></i>
                                        </a>
                                    </td>
                                    <form id="remove-cart-{{ $cart->id }}" method="post" action="{{ url('cart/'. $cart->id) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete" />
                                    </form>
                                    <td class="quicky-product-thumbnail"><a href="{{ url('shop/'. $cart->product->shop->slug) }}"><img src="{{ $cart->product->image }}" alt="{{ $cart->product->name }}" style="max-width: 100px;"></a></td>
                                    <td class="quicky-product-name">
                                        <a href="{{ url('shop/'. $cart->product->shop->slug) }}">{{ $cart->product->name }}</a>
                                        <br />
                                        <a href="{{ url('shop/'. $cart->product->shop->slug) }}"><span style="font-size: 0.75rem">{{ $cart->product->shop->name }}</span></a>
                                    </td>
                                    <td class="quicky-product-price"><span class="amount">@currency($cart->product->price)</span></td>
                                    <td class="quantity">
                                        <div class="cart-plus-minus" data-id="{{ $cart->id }}">
                                            <input id="quantity-{{ $cart->id }}" class="cart-plus-minus-box" value="{{ $cart->quantity }}" type="text">
                                            <div class="dec qtybutton" onclick="updateCart('{{ $cart->id }}', '{{ $cart->quantity }}', 'dec');"><i class="zmdi zmdi-chevron-down"></i></div>
                                            <div class="inc qtybutton" onclick="updateCart('{{ $cart->id }}', '{{ $cart->quantity }}', 'inc');"><i class="zmdi zmdi-chevron-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">@currency($cart->quantity * $cart->product->price)</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="coupon-all">
                            <!-- <div class="coupon">
                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                <input class="button mt-xxs-30" name="apply_coupon" value="Apply coupon" type="submit">
                            </div> -->
                            <!-- <div class="coupon2">
                                <input class="button"  type="submit">
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 ml-auto">
                        <div class="cart-page-total">
                            <h2>Cart totals</h2>
                            <ul>
                                <li>Subtotal <span>@currency($carts->sum('total_price'))</span></li>
                                <li>Total <span>@currency($carts->sum('total_price'))</span></li>
                            </ul>
                            <a href="{{ url('checkout') }}">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('extra-js')
<script>
    function updateCart(cartId, quantity, state) {
        var oldValue = quantity;
        var newVal = 0;
        if (state == 'inc') {
            newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                )
            }
        });

        $.ajax({
            type: "PATCH",
            url: "{{ url('cart') }}" + "/" + cartId,
            data: {
                quantity: newVal
            },
            success: function(data) {
                window.location.href = '{{ url("cart") }}';
            }
        });
    }        
</script>
@endsection