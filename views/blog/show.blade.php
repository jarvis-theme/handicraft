<section>
	<div class="row">
		<h3 class="title"><a>{{$detailblog->judul}}</a></h3>
	</div>
	<div class="row">
		<div class="eight columns section">
			<div class="row">
				<article class="twelve columns">
					<div class="meta">
		                <i class="icon-calendar"></i> {{waktuTgl($detailblog->created_at)}} <i class="icon-folder"></i> <a href="{{blog_category_url(@$detailblog->kategori)}}">{{@$detailblog->kategori->nama}}</a>
		            </div>
					<div class="image"></div>
					<p>{{$detailblog->isi}}</p>
				</article>
			</div>

			<!-- pagination -->
			<div class="row" style="margin: 20px 0;border-top: 1px solid #EEE;border-bottom: 0px none;padding-top: 20px;">
			@if(isset($prev))
                <div class="medium metro rounded btn primary icon-left icon-left-open">
                	<a href="{{$prev->slug}}">Artikel Sebelumnya</a>
            	</div>
            @else
                <div></div>
            @endif

            @if(isset($next))
                <div class="medium metro rounded btn primary icon-right icon-right-open fright">
                    <a href="{{$next->slug}}">Artikel Selanjutnya</a>
                </div>
            @else
                <div></div>
            @endif
		  	</div>

			<!-- comment section -->
			<div class="comments">
		        {{$fbscript}}
                {{fbcommentbox(slugBlog($detailblog), '100%', '5', 'light')}}
			</div>
			<br />
		</div>

		<!-- widget -->
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