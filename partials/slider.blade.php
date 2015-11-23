<section>
	<div class="row">
		<div id="slider">
			<a href="#" class="unslider-arrow prev"><i class="icon-left-open-mini"></i></a>
			<a href="#" class="unslider-arrow next"><i class="icon-right-open-mini"></i></a>
			<ul>
				@foreach(slideshow() as $slide)
				<li>
					<div class="tagline">
        				<a href="{{$slide->text=='' ? '#' : $slide->text}}">
							{{HTML::image(slide_image_url($slide->gambar),'slideshow')}}
						</a>
					</div>
				</li>
				@endforeach
			</ul>
		</div>	
	</div>
</section>