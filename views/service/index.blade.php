<section style="margin-bottom:40px">
	<div class="row">
		<h3 class="title">Customer Service</h3>
	</div>
	<div class="row">
		<div class="panel">
			<div class="header">
				<a href="#" class="toggle" gumby-trigger="#q1">Term of Service</a>
			</div>
			<div class="drawer" id="q1">
				<p>{{$service->tos}}</p>
			</div>
		</div>
		<div class="panel">
			<div class="header">
				<a href="#" class="toggle" gumby-trigger="#q2">Refund Policy</a>
			</div>
			<div class="drawer" id="q2">
				<p>{{$service->refund}}</p>
			</div>
		</div>
		<div class="panel">
			<div class="header">
				<a href="#" class="toggle" gumby-trigger="#q3">Privacy Policy</a>
			</div>
			<div class="drawer" id="q3">
				<p>{{$service->privacy}}</p>
			</div>
		</div>
	</div>
</section>