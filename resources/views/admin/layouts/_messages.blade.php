@if(session()->has('message'))

<div class="container">
    		
    <div class="justify-content-center" style="text-align:center">

		<div class="alert alert-success">

			{{ session()->get('message') }}

		</div>

	</div>

</div>

@endif