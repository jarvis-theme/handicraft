@if(Session::has('msg2'))
<div class="success" id='message' style='display:none'>
	Terima kasih, pesan anda sudah terkirim.
</div>
@endif
@if(Session::has('msg3'))
<div class="success" id='message' style='display:none'>
	Maaf, pesan anda belum terkirim.
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	Terjadi kesalahan dalam menyimpan data.<br><br>
	@foreach($errors->all() as $message)
	-{{ $message }}<br>
	@endforeach
	</ul>
</div>
@endif

<section style="margin-bottom:40px">
	<div class="row">
		<h3 class="title"><i class="icon-mail"></i> Contact <span>Us</span> </h3>
	</div>
	<div class="row">
		<div class="row section">
			<div class="six columns">
				<div class="respond">
					<div class="title">
						<h4>Contact Form</h4>
					</div>
					<form action="{{url('kontak')}}" method="post">
						<ul>
							<li class="field">
								<label for="name">Your Name</label>
								<input class="text input" id="name" type="text" name="namaKontak" required/>
							</li>
							<li class="field">
								<label for="email">Email address</label>
								<input class="email input" id="email" type="email" name="emailKontak" required/>
							</li>
							<li class="field">
								<label for="message">Message</label>
								<textarea class="input textarea" id="message" rows="3" name="messageKontak" required></textarea>
							</li>
						</ul>
						<div class="medium metro rounded btn primary">
							<button type="submit">Submit</button>
						</div>
				   		<div class="pretty medium default btn">
				   			<button type="reset">Reset</button>
			   			</div>
					</form>     
				</div>
			</div>
			<div class="six columns">
				<div class="title">
					<h4>Address</h4>
				</div>
				<div class="address">
		           <address>
		              <!-- Company name -->
		              <h6>{{$kontak->nama}}</h6>
		              <!-- Address -->
		              {{$kontak->alamat}}<br />
		              <!-- Phone number -->
		              <abbr title="Phone">P:</abbr> {{$kontak->telepon}}<br>
		              <!-- Email -->
		              <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
		           </address>
		           
		    	</div>
		    	@if($kontak->lat!='0' || $kontak->lng!='0')
                    <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                @else
                    <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq=gegerkalong+hil&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                @endif

			</div>
		</div>
		<p><br /></p>
	</div>
</section>