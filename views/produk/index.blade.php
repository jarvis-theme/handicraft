<section style="margin-bottom: 40px;">
	<div class="row">
		<h3 class="title">Produk Kami</h3>
	</div>
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
        		<li><a href="{{url('home')}}">Home</a></li> {{$breadcrumb}}
			</ul>
		    <div class="row" value="{{$row = 0}}">
			@foreach(list_product(null,@$category) as $products)
			    <!-- product section -->
			    <div class="four columns image photo product">
			      	<!-- product image -->
			  		<a href="{{product_url($products)}}">
			  			<img src="{{url(product_image_url($products->gambar1,'medium'))}}" alt="Produk" style="height:214px;width:auto;" />
			  		</a>
			      	<!-- product detail -->
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
						<input type="hidden" value="{{$row += 1}}">
					</div>
			    </div>
			    @if(($row % 3) == 0 && $row != 0)
			    </div>
			    <div class="row" value="{{$row}}">
			    @endif
		    @endforeach
		    </div>
		</div>
		<div style="float:right">
            {{list_product(null,@$category)->links()}}
        </div>
	</div>
</section>