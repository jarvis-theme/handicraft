<section style="margin-bottom: 40px;">
	<div class="row">
		<h3 class="title">Hasil Pencarian</h3>
	</div>
	<div class="row">
		<div class="twelve columns section">
        @if($jumlahCari != 0)
		    <div class="row" value="{{$row = 0}}">
			@foreach($hasilpro as $products)
			    <!-- product section -->
			    <div class="three columns image photo product">
			      	<!-- product image -->
			  		<a href="{{product_url($products)}}">
			  			<img src="{{url(product_image_url($products->gambar1,'medium'))}}" alt="Produk" style="height:214px;width:auto;" />
			  		</a>
			      	<!-- product detail -->
			      	<div class="product-detail">
						<h4 class="title"><a href="{{product_url($products)}}">{{short_description($products->nama,19)}}</a></h4>
						@if(is_outstok($products))
							<span class="empty">Kosong</span>
                        @endif
                        @if(is_terlaris($products))
							<span class="sale">Hot</span>
                        @endif
                        @if(is_produkbaru($products))
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
			    @if(($row % 4) == 0 && $row != 0)
			    </div>
			    <div class="row" value="{{$row}}">
			    @endif
		    @endforeach
		    </div>
		    <div class="row">
		    	@foreach($hasilblog as $blogs)
			    <div>
			    {{short_description($blogs->isi,300)}}
			    12321
			    </div>
			    @endforeach
		    </div>
	    @else
		    <article class="text-center">
	            <i>Hasil pencarian tidak ditemukan</i>
	        </article>
        @endif
		</div>
	</div>
</section>