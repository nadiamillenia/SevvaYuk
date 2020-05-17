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
                        <p>Showing {{ $shops->firstItem() }}–{{ $shops->lastItem() }} of {{ $shops->total() }} results</p>
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
                    @foreach ($shops as $shop)
                    <div class="col-12">
                        <div class="product-item">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{ url('shop/'. $shop->slug) }}">
                                        <img src="{{ $shop->image }}" alt="{{ $shop->name }}">
                                    </a>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a href="{{ url('shop/'. $shop->slug) }}" data-toggle="tooltip" data-placement="top" title="Lihat Toko"><i class="icon-magnifier"></i></a>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Tambahkan Ke Toko Favorit"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content bg-snow">
                                    <div class="product-desc_info">
                                        <div class="manufacture-product_top">
                                            <span>{{ $shop->category->name }}</span>
                                        </div>
                                        <h3 class="product-name"><a href="{{ url('shop/'. $shop->slug) }}">{{ $shop->name }}</a></h3>
                                        <div class="price-box">
                                            <span class="product-desc_info">{{ $shop->address }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-product_item">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{ url('shop/'. $shop->slug) }}">
                                        <img src="{{ $shop->image }}" alt="{{ $shop->name }}">
                                    </a>
                                </div>
                                <div class="quicky-product-content">
                                    <div class="product-desc_info">
                                        <div class="price-box">
                                            <span class="product-desc_info">━ &nbsp; {{ $shop->category->name }}</span>
                                        </div>
                                        <h6 class="product-name"><a href="{{ url('shop/'. $shop->slug) }}">{{ $shop->name }}</a></h6>
                                        <div class="price-box">
                                            <span class="product-desc_info">{{ $shop->address }}</span>
                                        </div>
                                        <div class="product-short_desc">
                                            <p>{{ $shop->description }}</p>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul>
                                            <li><a href="{{ url('shop/'. $shop->slug) }}" data-toggle="tooltip" data-placement="top" title="Lihat Toko"><i class="icon-magnifier"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Tambahkan Ke Toko Favorit"><i class="icon-heart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $shops->links('vendor.pagination.default') }}
            </div>
        </div>
    </div>
</div>