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


		<div class="instrucciones">
			<h3>Instrucciones</h3>
			<p>
				<h4>¿Cómo puedo agregar un banner nuevo?</h4>
				<ol>
					<li>Dar click al botón “Crear Banner”</li>
					<li>Ingresar el nombre del evento</li>
					<li>Seleccionar un archivo, que cumpla con las siguientes especificaciones:</li>
						<ul>
							<li>El archivo debe tener un ancho de 1920pixeles</li>
							<li>El archivo debe tener un alto de 600pixeles</li>
							<li>El archivo no debe pesar más de 1mb</li>
						</ul>
					<li>Dar click al botón “Guardar Banner”</li>
					<li>El banner aparecerá en el listado que se muestra en el inicio. Para poder visualizarlo en el sitio web es necesario activarlo. Para ello, se debe dar click al botón “Activar”.</li>
				</ol>
			</p>

			<p>
				<h4>¿Cómo puedo editar un banner?</h4>
				<ol>
					<li>Ubicar el banner que se desea editar en el listado de banners del inicio</li>
					<li>Dar click al botón “Editar”</li>
					<li>Puede modificar tanto el nombre del banner como el archivo</li>
					<li>El archivo debe cumplir con las mismas especificaciones mencionadas en el apartado anterior</li>
					<li>Una vez que haya modificado su información, dar click en el botón “Guardar Banner”</li>
					<li>El banner aparecerá en el listado de banners del inicio</li>
				</ol>
			</p>

			<p>
				<h4>¿Cómo puedo eliminar un banner?</h4>
				Debe tener en cuenta que una vez que el banner ha sido eliminado no se podrá recuperar de nuevo
				<ol>
					<li>Ubicar el banner que se desea eliminar en el listado de banners del inicio</li>
					<li>Dar click al botón “Eliminar”</li>
				</ol>
			</p>

			<p>
				<h4>¿Para qué sirve el botón de Activar/Desactivar?</h4>
				Permite mostrar u ocultar un banner en el sitio web. Si no quiere que aparezca ningún banner en el sitio web, debe desactivar todos los banners que se muestran en el listado del inicio.
				Puede tener N cantidad de banners activos a la vez, sin embargo, se sugiere tener un máximo de entre 3 y 5 banners para que los usuarios que visiten el sitio web puedan visualizarlos todos.
			</p>

		</div>


	</div>


@endsection
