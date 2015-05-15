@if(Session::has('error'))
<div class="error" id='message' style='display:none'>							
	{{Session::get('error')}}
</div>
@endif
@if(Session::has('success'))
<div class="success" id='message' style='display:none'>
	<p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>
</div>
@endif
@if(Session::has('errorrecovery'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, email anda tidak ditemukan.</p>					
</div>
@endif	

@if(Session::has('error'))
<div class="alert alert-error" style='display:none'>
	<h3>Kami menemukan error berikut:</h3>
	<p>{{Session::get('error')}}</p>
</div>
@endif

<section style="margin-bottom:40px">
	<div class="row">
		<h3 class="title">Login to Access <span>Amazing Benefits !!!</span> </h3>
	</div>
	<div class="row section">
		<!-- login section -->
		<div class="six columns">
			<div class="respond">
				<div class="title">
					<h4>Login</h4>
				</div>
				<form action="{{url('member/login')}}" method="post">
					<ul>
						<li class="field">
					    	<label class="mheight" for="email"><strong>Email</strong></label>
					    	<input class="text input" id="email" type="email" name="email" value='{{Input::old("email")}}' required />
						</li>
						<li class="field">
					    	<label class="mheight" for="pass"><strong>Password</strong></label>
					    	<input class="text input" id="pass" type="password" name="password" required />
						</li>
						<li class="field">
					    	<a href="{{url('member/forget-password')}}">Forget your password? </a>
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