<section class="sectiondiv">
    <div class="row">
        <h3 class="title">Produk Kami</h3>
    </div>
    <div class="row">
        <div class="three columns">
            <ul class="sidenav">
                @foreach(main_menu()->link as $menus)
                <li><a href="{{menu_url($menus)}}">{{$menus->nama}}</a></li>
                @endforeach
            </ul>
            <div class="side-title">
                    <h5>Produk Terlaris</h5>
                </div>
                @if(best_seller()->count() > 0)
                <div class="aside">
                    @foreach(best_seller() as $best)
                    <div class="side-thumb">
                        <a href="{{product_url($best)}}">
                            <div class="img-block">
                                {{HTML::image(product_image_url($best->gambar1,'thumb'),$best->nama)}}
                            </div>
                            <p>{{short_description($best->nama, 25)}}</p>
                            <p>{{price($best->hargaJual)}}</p> 
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
                @foreach(vertical_banner() as $banners)
                <div class="center">
                    <a href="{{url($banners->url)}}">
                        {{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}} 
                    </a>
                </div>
                @endforeach
        </div>
        <div class="nine columns section">
            <ul class="breadcrumbs">
                <li><a href="{{url('home')}}">Home</a></li> {{$breadcrumb}}
            </ul>
            <div class="row">
            {{-- */ $row = 0 /* --}}
            @foreach(list_product(null,@$category) as $products)
                <div class="four columns image photo product">
                    <a href="{{product_url($products)}}">
                        <img src="{{url(product_image_url($products->gambar1,'medium'))}}" alt="{{$products->nama}}" />
                    </a>
                    <div class="product-detail">
                        <h4 class="title"><a href="{{product_url($products)}}">{{short_description($products->nama,19)}}</a></h4>
                        @if(is_outstok($products))
                        <span class="empty">Kosong</span>
                        @elseif(is_terlaris($products))
                        <span class="sale">Hot</span>
                        @elseif(is_produkbaru($products))
                        <span class="new">Baru</span>
                        @endif
                        <span class="price">
                            @if(!empty($products->hargaCoret))
                            <del><span class="amount">{{price($products->hargaCoret)}}</span></del>&nbsp;
                            @endif
                            <ins><span class="amount">{{price($products->hargaJual)}}</span></ins>
                        </span>
                        <div class="medium oval btn primary default">
                            <a href="{{product_url($products)}}">Lihat</a>
                        </div>
                    </div>
                </div>
                {{-- */ $row += 1 /* --}}
                @if(($row % 3) == 0 && $row != 0)
                </div>
                <div class="row">
                @endif
            @endforeach
            </div>
        </div>
        <div class="pull-right">
            {{list_product(null,@$category)->links()}}
        </div>
    </div>
</section>