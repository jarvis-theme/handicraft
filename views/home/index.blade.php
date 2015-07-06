<section id="popular">
	<div class="row">
		<div class="twelve columns">
			<h3>Koleksi Produk Kami</h3>
			<span type="hidden" value="{{$val=0}}"></span>
			<div class="row">
				@foreach(home_product() as $products)
				<!-- product section -->
				<div class="four columns image photo product">
					<!-- product image -->
					<a href="{{product_url($products)}}">
						<img src="{{url(product_image_url($products->gambar1,'medium'))}}" alt="produk">
					</a>
					<!-- product detail -->
					<div class="product-detail">
						<h4 class="title"><a href="{{product_url($products)}}">{{short_description($products->nama,27)}}</a></h4>
						@if(is_outstok($products))
						<span class="empty">KOSONG</span>
						@else
							@if(is_terlaris($products))
							<span class="sale">HOT</span>
							@elseif(is_produkbaru($products))
							<span class="new">BARU</span>
							@endif
						@endif
						<span class="price">
							@if(!empty($products->hargaCoret))
							<del><span class="amount">{{price($products->hargaCoret)}}</span></del>
							@endif
							<ins><span class="amount">{{price($products->hargaJual)}}</span></ins>
						</span>
						<div class="medium oval btn primary default">
							<a href="{{product_url($products)}}">Lihat</a>
						</div>
					</div>
				</div>
				<span type="hidden" value="{{$val+=1}}"></span>
				@if($val % 3 == 0 && $val != 0)
				</div>
				<div class="row">
				@endif
				@endforeach
			</div>
			<div class="row">
				<div class="medium metro rounded btn icon-right icon-right-open-mini">
					<a href="{{url('produk')}}">Lihat Koleksi Produk</a>
				</div>
			</div>
		</div>
	</div>
</section>

@if(count(new_product()) > 0)
<section id="whatsnew">
	<div class="row">
		<h3>Produk Terbaru</h3>
		<div class="row">
			@foreach(new_product() as $new_produk)
			<!-- product section -->
			<div class="three columns image photo product">
				<!-- product image -->
				<a href="{{product_url($new_produk)}}">
					<img src="{{url(product_image_url($new_produk->gambar1,'medium'))}}" alt="new produk">
				</a>
				<!-- product detail -->
				<div class="product-detail">
					<h4 class="title"><a href="{{product_url($new_produk)}}">{{short_description($new_produk->nama, 18)}}</a></h4>
					<span class="price">
						@if(!empty($new_produk->hargaCoret))
						<del><span class="amount">{{price($new_produk->hargaCoret)}}</span></del>
						@endif
						<ins><span class="amount">{{price($new_produk->hargaJual)}}</span></ins>
					</span>
					<div class="medium oval btn primary default">
						<a href="{{product_url($new_produk)}}">Lihat</a>
					</div>            
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endif