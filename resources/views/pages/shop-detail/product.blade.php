<div class="product-area-13 ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="heading">Daftar Produk</h3>
                    <div class="section-icon"></div>
                </div>
            </div>
            <div class="quicky-content_wrapper pt-90 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shop-toolbar">
                                <div class="product-view-mode">
                                    <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="zmdi zmdi-grid"></i></a>
                                    <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="zmdi zmdi-view-list-alt"></i></a>
                                </div>
                                <div class="product-page_count">
                                    <p>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results</p>
                                </div>
                                <div class="product-item-selection_area">
                                    <div class="product-short">
                                        <label class="select-label">Short By:</label>
                                        <select class="nice-select">
                                            <option value="1">Default sorting</option>
                                            <option value="2">Name, A to Z</option>
                                            <option value="3">Name, Z to A</option>
                                            <option value="4">Price, low to high</option>
                                            <option value="5">Price, high to low</option>
                                            <option value="5">Rating (Highest)</option>
                                            <option value="5">Rating (Lowest)</option>
                                            <option value="5">Model (A - Z)</option>
                                            <option value="5">Model (Z - A)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-product-wrap grid gridview-3 row">
                                @foreach ($products as $product)
                                    <div class="col-lg-12">
                                        <div class="product-item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="{{ $product->image }}" alt="{{ $product->name }}">
                                                    </a>
                                                    <!-- <span class="sticker red-color">Sale</span> -->
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Tambahkan Ke Wishlist"><i class="icon-heart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('cart.store') }}" onclick="event.preventDefault(); document.getElementById('add-to-cart-' + <?php echo $product->id; ?>).submit();" data-toggle="tooltip" data-placement="top" title="Tambahkan Ke Keranjang"><i class="icon-bag"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-content bg-snow">
                                                    <div class="product-desc_info">
                                                        <div class="manufacture-product_top">
                                                            <span>{{ $product->category->name }}</span>
                                                        </div>
                                                        <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price ml-0">@currency($product->price)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-product_item">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="{{ $product->image }}" alt="{{ $product->name }}">
                                                    </a>
                                                </div>
                                                <div class="quicky-product-content">
                                                    <div class="product-desc_info">
                                                        <div class="price-box">
                                                            <span class="product-desc_info">━ &nbsp; {{ $product->category->name }}</span>
                                                        </div>
                                                        <h6 class="product-name"><a href="#">{{ $product->name }}</a></h6>
                                                        <div class="price-box">
                                                            <span class="product-desc_info">{{ $product->address }}</span>
                                                        </div>
                                                        <div class="product-short_desc">
                                                            <p>{{ $product->description }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Tambahkan Ke Wishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="{{ route('cart.store') }}" onclick="event.preventDefault(); document.getElementById('add-to-cart-' + <?php echo $product->id; ?>).submit();" data-toggle="tooltip" data-placement="top" title="Tambahkan Ke Keranjang"><i class="icon-bag"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form id="add-to-cart-{{ $product->id }}" method="POST" action="{{ route('cart.store') }}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}" />
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                            {{ $products->links('vendor.pagination.default') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>