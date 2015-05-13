<section style="margin-bottom: 40px;">
	<div class="row">
		<h3 class="title">Blog </h3>
	</div>
	<div class="row">
		<div class="eight columns section">
		@if(count(list_blog(null,@$blog_category)) > 0)
			@foreach(list_blog(null,@$blog_category) as $blogs)
			<div class="row">
				<article class="twelve columns">
					<h3><a href="{{blog_url($blogs)}}">{{$blogs->judul}}</a></h3>
					<div class="meta">
		                <i class="icon-calendar"></i> {{date("d F Y", strtotime($blogs->updated_at))}} <i class="icon-folder"></i> <a href="{{blog_category_url(@$blogs->kategori)}}">{{$blogs->kategori->nama}}</a>
		            </div>
					<p>{{short_description($blogs->isi,300)}}</p>
					<div class="pretty medium default btn"><a href="{{blog_url($blogs)}}">Baca Selengkapnya <i class="icon-right-open"></i> </a></div>
				</article>
			</div>
			<hr />
			@endforeach
			<div style="float:right">
				{{list_blog(null,@$blog_category)->links()}}
			</div>
			<br />
		@else
			<div class="row">
				<article class="twelve columns">
					<p>Blog tidak ditemukan.</p>
				</article>
			</div>
		@endif
		</div>
		<div class="four columns aside">
			<div class="widget">
			 <h4>Search</h4>
			    <form class="form-inline widget-search" role="form" action="{{url('search')}}" method="post">
					<li class="append field">
						<input class="wide text input" type="text" placeholder="Search" required />
						<div class="medium primary btn"><button type="submit"><i class="icon-search"></i></button></div>
					</li>
			    </form>
			</div>

			<div class="widget">
			<h4>Artikel Terbaru</h4>
				<ul>
					@foreach(recentBlog(null,5) as $artikel)
                    <li>
                        <a href="{{blog_url($artikel)}}">{{short_description($artikel->judul, 28)}}</a><br>
                        <span style="font-size: 14px;">{{date("d F Y", strtotime($artikel->created_at))}}</span>
                    </li>
                    @endforeach
				</ul>
			</div>

			<div class="widget">
			 	<h4>Kategori</h4>
				@foreach(list_blog_category() as $kat)
        		<span style="text-decoration: underline;"><a href="{{blog_category_url($kat)}}">{{$kat->nama}}</a></span>&nbsp;&nbsp;
                @endforeach	
			</div>
		</div>
	</div>
</section>