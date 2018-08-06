@extends('admin.layouts.admin')


@section('content')

	<div class="container">

		<div class="header-list">
			
			<a href="{{ route('admin.create_banner_path') }}" class="btn btn-info">Crear Banner</a>
		
		</div>
    		
		@foreach($banners as $banner)

			<div class="row justify-content-center">

				<div class="col-md-12">

					<h2 class="content-row list-row">
						<div class="list-text">
							<span>{{ $banner->name }} </span>
						</div>

						<small class="content-row-btn list-buttons">
							<form action="{{ route('admin.active_banner_path',['banner'=> $banner->id]) }}" method="post">
								<!-- token de seguridad --> 		
								{{ csrf_field() }} 

								@if( !$banner->is_active)

									<button type="submit" class="btn btn-success">Activar</button>						

								@else

									<button type="submit" class="btn btn-warning">Desactivar</button>						

								@endif
							</form>

							<a href="{{ route('admin.edit_banner_path', ['banner' => $banner->id]) }}" class="btn btn-info">Editar</a>


							<form action="{{ route('admin.delete_banner_path',['banner'=> $banner->id]) }}" method="post">
								<!-- token de seguridad --> 		
								{{ csrf_field() }} 

								<!-- helper de laravel para enviar como tipo put --> 		
								{{ method_field('DELETE') }}

								<button type="submit" class="btn btn-danger">Eliminar</button>						

							</form>

						</small>

					</h2>

				</div>

			</div>

			<hr>

		@endforeach

		{{ $banners->render() }}


	</div>


@endsection
