@if(Session::has('flash_message'))
	<div class="container">
		<div class="alert alert-info text-center" id="msg">
			{{ Session::get('flash_message') }}
		</div>
	</div>
@endif