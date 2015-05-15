@if($errors->all())
<div class="alert alert-error">
	Kami menemukan error berikut:			
	<ul>
		@foreach($errors->all() as $message)
		<li style="margin-left: 20px;">{{ $message }}</li>
		@endforeach
	</ul>
</div>
@endif

@if(Session::has('error'))
	<div class="alert alert-error">
		<h3>Kami menemukan error berikut:</h3>
		<p>{{Session::get('error')}}</p>
	</div>
@endif

<section>
	<div class="row">
		<h3 class="title">Login to Access <span>Amazing Benefits !!!</span> </h3>
	</div>
	<div class="row">
		<!-- login section -->
		<div class="six columns aside">
			<form action="{{url('member')}}" method="post">
				<div class="title">
					<h4>Register</h4>
				</div>
				<!-- name -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight" for="nama"><strong>Nama</strong></label>
				    </div>
				    <div class="nine columns">
				      <input class="text input" id="text" type="text" value="{{Input::old('nama')}}" name="nama" required />
				    </div>
				</div>
				<!-- email -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight" for="email"><strong>Email</strong></label>
				    </div>
				    <div class="nine columns">
				      <input class="text input" id="email" type="email" name="email" required />
				    </div>
				</div>
				<!-- password -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight" for="pass"><strong>Password</strong></label>
				    </div>
				    <div class="nine columns">
				      <input class="text input" id="pass" type="password" name="password" required />
				    </div>
				</div>
				<!-- re password -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight" for="pass"><strong>Re-Type Password</strong></label>
				    </div>
				    <div class="nine columns">
				      <input class="text input" id="pass" type="password" name="password_confirmation" required />
				    </div>
				</div>
				<!-- negara -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight" for="country"><strong>Negara</strong></label>
				    </div>
				    <div class="nine columns">
						{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara,Input::old(''),array('required', 'id="negara" data-rel="chosen" class="twelve columns text input"'))}}
				    </div>
				</div>
				<!-- provinsi -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight"><strong>Provinsi</strong></label>
				    </div>
				    <div class="nine columns">
						{{Form::select('provinsi',array('' => '-- Pilih Provinsi --'), Input::old("provinsi"),array('required', 'id="provinsi" data-rel="chosen" class="twelve columns text input"'))}}
				    </div>
				</div>
				<!-- kota -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight"><strong>Kota</strong></label>
				    </div>
				    <div class="nine columns">
						{{Form::select('kota',array('' => '-- Pilih Kota --'), Input::old("kota"),array('required', 'id="kota" data-rel="chosen" class="twelve columns text input"'))}}
				    </div>
				</div>
				<!-- alamat -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight"><strong>Alamat</strong></label>
				    </div>
				    <div class="nine columns">
				     	<textarea class="input textarea" id="address" rows="3" name='alamat' required>{{Input::old("alamat")}}</textarea>
				    </div>
				</div>
				<!-- kode pos -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight"><strong>Kode Pos</strong></label>
				    </div>
				    <div class="nine columns">
				      <input class="text input" id="pass" type="password" name="kodepos" value='{{Input::old("kodepos")}}' />
				    </div>
				</div>	
				<!-- telepon -->
				<div class="field row">
				    <div class="three columns tright">
				      <label class="mheight"><strong>Telepon</strong></label>
				    </div>
				    <div class="nine columns">
				      <input class="text input" id="pass" type="password" name='telp' value='{{Input::old("telp")}}' required />
				    </div>
				</div>
				<div class="field row">
					<div class="three columns tright">
						<label class="mheight"><strong>Captcha</strong></label>
					</div>
					<div class="nine columns">
						{{ HTML::image(Captcha::img(), 'Captcha image') }}
						{{Form::text('captcha','', array('class'=>'text input'))}}
					</div>
				</div>
				<!-- remember -->
				<div class="field row">
				    <div class="three columns tright">
				    </div>
				    <div class="nine columns">
				      <label class="checkbox checked" for="check1">
					    <input name="readme" id="check1" value="1" type="checkbox" />
					    <span></span> Saya telah membaca dan menyetujui </label><a href="{{url('service')}}" target="_blank">Syarat dan Ketentuan</a>
					  
				    </div>
				</div>
				<div class="field row">
				    <div class="three columns tright">
				    </div>
				    <div class="nine columns">
				      <div class="medium metro rounded btn primary"><button>Sign In</button></div>
				   	  <div class="pretty medium default btn"><button>Reset</button></div>
				    </div>
				</div>
			</form>
		</div>
		<!-- register <section></section> -->
		<div class="six columns">
			<div class="title">
				<h4>Have An Account</h4>
			</div>
			<p>
				By login you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
				<div class="medium metro rounded btn primary">
					<a href="{{url('member')}}">Login</a>
				</div>
			</p>
		</div>

		
	</div>
</section>