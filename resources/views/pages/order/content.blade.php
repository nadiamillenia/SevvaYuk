<main class="page-content">
    <!-- Begin Account Page Area -->
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                @include('layouts.includes.account-navbar')
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <div class="myaccount-orders">
                            <h4 class="small-title">CATATAN PEMBELIAN</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th>PESANAN</th>
                                            <th>TANGGAL</th>
                                            <th>STATUS</th>
                                            <th>TOTAL</th>
                                            <th></th>
                                        </tr>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td><a class="account-order-id" href="javascript:void(0)">#{{ $order->id }}</a></td>
                                                <td>{{ date('M j, Y', strtotime($order->created_at)) }}</td>
                                                <td>{{ $order->status->name }}</td>
                                                <td>@currency($order->amount) untuk {{ $order->details->count() }} barang</td>
                                                @if ($order->status_id == 1)
                                                    <td><a href="{{ url('payment/'. $order->id) }}" class="quicky-btn-2 quicky-btn_sm"><span>Bayar</span></a>
                                                @else
                                                    <td><a href="javascript:void(0)" class="quicky-btn-2 quicky-btn_sm"><span>Selesai</span></a>
                                                @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Page Area End Here -->
</main>