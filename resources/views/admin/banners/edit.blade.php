@extends('admin.layouts.admin')


@section('content')

	<div class="container">

		<div class="header-list">
			
			<a href="{{ route('admin.dashboard') }}" class="btn btn-info">Banners</a>
		
		</div>

		<h2>Editar Banner</h2>

		@include('admin.banners._form',['banner'=> $banner])

	</div>  

@endsection
