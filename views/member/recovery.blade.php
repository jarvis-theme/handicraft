@if(Session::has('errorlogin'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, email atau password anda salah.</p>
</div>
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
	{{Session::get('error')}}!!!
</div>
@endif
@if(Session::has('errorrecovery'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, email anda tidak ditemukan.</p>
</div>
@endif
@if(Session::has('forget'))
<div class="success" id='message' style='display:none'>
	<p>Cek email untuk me-reset password anda!</p>
</div>  
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
	<p>{{Session::get('error')}}</p>
</div>  
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	@foreach($errors->all() as $message)
	<p>{{ $message }}</p>
	@endforeach
</div>  
@endif

<section style="margin-bottom:40px">
	<div class="row section">
		<!-- login section -->
		<div class="six columns">
			<div class="respond">
				<div class="title">
					<h4>Forget Password</h4>
				</div>
				{{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code))}}
					<ul>
						<li class="field">
					    	<label class="mheight" for="password"><strong>Password Baru</strong></label>
					    	<input class="text input" id="inputEmail1" type="password" name="password" required />
						</li>
						<li class="field">
					    	<label class="mheight" for="pass"><strong>Konfirmasi Password Baru</strong></label>
							<input class="text input" id="inputEmail1" type="password" name="password_confirmation" required>
						</li>
					</ul>
					<div class="medium metro rounded btn primary" type="submit" value="Submit">
						<button>Submit</button>
					</div>
				</form>
			</div>
		</div>
		<div class="six columns">
			<div class="title">
				<h4>New Costumer</h4>
			</div>
			<p>
				By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
				<div class="medium metro rounded btn primary">
					<a href="{{url('member/create')}}">Register</a>
				</div>
			</p>
		</div>

	</div>
</section>