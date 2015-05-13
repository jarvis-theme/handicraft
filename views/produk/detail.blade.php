<section style="margin-bottom: 40px;">
	<div class="row">
		<h3 class="title">Produk Kami</h3>
	</div>
	<div class="row">
		<div class="row">
			<div class="three columns sidenav">
				<ul class="sidenav">
					@foreach(main_menu()->link as $menus)
					<li><a href="{{menu_url($menus)}}">{{$menus->nama}}</a></li>
					@endforeach
				</ul>
			</div>

			<div class="nine columns section">
				<ul class="breadcrumbs">
					<li><a href="{{url('home')}}">Home</a></li>
					<li><a href="{{url('produk')}}">Produk</a></li>
					<li><a>{{$produk->nama}}</a></li>
				</ul>
				<div class="row">
					<div class="five columns section">
						<div class="image photo product">
							<a class="zoom fancybox" href="{{product_image_url($produk->gambar1)}}" title="{{short_description($produk->nama,20)}}">
					        	<img src="{{url(product_image_url($produk->gambar1))}}" alt="Produk" />
					        </a>
						</div>
						<div id="thumb-view">
                        	<ul id="thumb-list" class="owl-carousel owl-theme">
                                @if($produk->gambar1 != '')
                                <li class="item">
                                    <a class="zoom fancybox" href="{{product_image_url($produk->gambar1)}}" title="{{$produk->nama}}">
                                    {{HTML::image(product_image_url($produk->gambar1,'medium'),'gambar1',array('width'=>'130', 'height'=>'auto'))}}
                                    </a>
                                </li>
                                @endif
                                @if($produk->gambar2 != '')
                                <li class="item">
                                    <a class="zoom fancybox" href="{{product_image_url($produk->gambar2)}}" title="{{$produk->nama}}">
                                    {{HTML::image(product_image_url($produk->gambar2,'medium'),'gambar2',array('width'=>'130', 'height'=>'auto'))}}
                                    </a>
                                </li>
                                @endif
                                @if($produk->gambar3 != '')
                                <li class="item">
                                    <a class="zoom fancybox" href="{{product_image_url($produk->gambar3)}}" title="{{$produk->nama}}">
                                    {{HTML::image(product_image_url($produk->gambar3,'medium'),'gambar3',array('width'=>'130', 'height'=>'auto'))}}
                                    </a>
                                </li>
                                @endif
                                @if($produk->gambar4 != '')
                                <li class="item">
                                    <a class="zoom fancybox" href="{{product_image_url($produk->gambar4)}}" title="{{$produk->nama}}">
                                    {{HTML::image(product_image_url($produk->gambar4,'medium'),'gambar4',array('width'=>'130', 'height'=>'auto'))}}
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
					</div>
					<div class="seven columns section productdetail">
						<div class="title">
							<h4>{{$produk->nama}}</h4>
						</div>
						<p class="price">
                            @if(!empty($produk->hargaCoret))
							<del><span class="amount">{{price($produk->hargaCoret)}}</span></del>
							@endif
							<ins><span class="amount">{{price($produk->hargaJual)}}</span></ins>
						</p>

						<div class="desc" style="margin-bottom: 20px;">
							{{sosialShare(product_url($produk))}}
						</div>
						<form class="cart" method="post" enctype="multipart/form-data" action="#" id="addorder">
							<div class="picker ">
								@if($opsiproduk->count() > 0)
								<select class="form-control">
							        <option>-- Pilih Opsi --</option>
							        @foreach ($opsiproduk as $key => $opsi)
                                    <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                        {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}
                                    </option>
                                    @endforeach
							    </select>
							    @endif
							</div>
							<li class="append field">
								<input class="narrow text input" type="number" step="1" min="1" placeholder="1" name="qty" value="1" />
								<div class="medium primary btn icon-left icon-basket"><button type="submit">Add to cart</button></div>
							</li>
						</form>
					</div>
				
				</div>
				<div class="row">
					<section class="tabs">
						<ul class="tab-nav">
							<li class="active"><a href="#">Description</a></li>
							<li class=""><a href="#">Review</a></li>
						</ul>
						<div class="tab-content active">
                            <p>{{$produk->deskripsi}}</p>
						</div>
						<div class="tab-content">
							<p>{{pluginTrustklik()}}</p>
						</div>
					</section>
				</div>
				<hr />
				@if(count(other_product($produk)) > 0)
				<div class="row">
					<div class="title">
						<h4>Related Product</h4>
					</div>
					<div class="row">
						@foreach(other_product($produk) as $other)
						<!-- product section -->
						<div class="three columns image photo product">
							<!-- product image -->
							<a href="{{product_url($other)}}">
							  <img src="{{url(product_image_url($other->gambar1))}}" alt="Produk Lainnya" />
							</a>
							<!-- product detail -->
							<div class="product-detail">
								<h4 class="title"><a href="{{product_url($other)}}">{{short_description($other->nama,15)}}</a></h4>
								@if(is_outstok($produk))
                                <span class="empty">KOSONG</span>
                                @endif
                                @if(is_terlaris($produk))
								<span class="sale">HOT</span>
                                @endif
                                @if(is_produkbaru($produk))
                                <span class="new">BARU</span>
                                @endif
								<span class="price">
									@if(!empty($other->hargaCoret))
									<del><span class="amount">{{price($other->hargaCoret)}}</span></del>&nbsp;
									@endif
									<ins><span class="amount">{{price($other->hargaJual)}}</span></ins>
						  		</span>
								<div class="medium oval btn primary default">
									<a href="{{product_url($other)}}">Lihat</a>
								</div>            
							</div>
						</div>
						@endforeach
					</div>     
				</div>
				@endif
			</div>
		</div>

	</div>
</section>