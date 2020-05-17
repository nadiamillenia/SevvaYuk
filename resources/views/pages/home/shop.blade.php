<div class="product-area-8 pt-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="heading">Daftar Toko</h3>
                    <div class="section-icon"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="quicky-element-carousel product-slider" data-slick-options='{
                    "slidesToShow": 3,
                    "slidesToScroll": 1,
                    "infinite": true,
                    "arrows": false,
                    "dots": false,
                    "spaceBetween": 30,
                    "rows" : 2
                    }' data-slick-responsive='[
                    {"breakpoint":992, "settings": {
                    "slidesToShow": 2
                    }},
                    {"breakpoint":768, "settings": {
                    "slidesToShow": 1
                    }}
                ]'>

                    @foreach ($shops as $shop)
                        <div class="product-item">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="{{ url('shop/'. $shop->slug) }}">
                                        <img src="{{ $shop->image }}" alt="{{ $shop->name }}">
                                    </a>
                                    <!-- <span class="sticker red-color">Sale</span> -->
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
                                        <h3 class="product-name"><a href="{{ url('shop/'. $shop->slug) }}">{{ $shop->name }}</a>
                                        </h3>
                                        <div class="price-box">
                                            <span class="product-desc_info">{{ $shop->address }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>