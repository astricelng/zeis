
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<!-- permite saber si ya fue almacenado en bd--> 		
	@if( $banner->exists )
	<form action="{{route('admin.update_banner_path',['banner'=> $banner->id])}}" method="POST" enctype="multipart/form-data">
		<!-- helper de laravel para enviar como tipo put --> 		
		{{ method_field('PUT') }}

	@else

	<form action="{{ route('admin.store_banner_path') }}" method="POST" enctype="multipart/form-data">

	@endif

		<!-- token de seguridad --> 		
		{{ csrf_field() }} 





		<div class="form-group">

			<label for="name"><strong>Nombre evento:</strong></label>

			<input type="text" name="name" class="form-control" value="{{ $banner->name or old('name') }}"/>

		</div>

		<div class="form-group">

			<label for="name"><strong>Banner:</strong></label>

			@if( $banner->exists && $banner->filename != '')

				<img src="{{ asset('/storage/'.$banner->filename) }}" width="300px" style="margin: 20px; display: block">

			@endif

			<input type="file" name="banner" class="form-control"/>


		</div>

		<div class="form-group">

			<button type="submit" class="btn btn-primary">Guardar Banner</button>

		</div>

	</form>