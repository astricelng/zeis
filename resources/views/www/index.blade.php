
@extends('www.layouts.page-head')

@section('content')



<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
  <div id="status"> <img src="{{ asset('assets/www/images/preloader.gif')}}" height="64" width="64" alt=""> </div>
</div>
<!-- Navigation -->
  <topbar es="{{ route('web.lang-switch', 'es') }}" en="{{ route('web.lang-switch', 'en') }}"></topbar>

<!-- Header -->
  <home></home>
  
<!-- About Section -->

  <about></about>

<!-- Services Section -->
  
  <services></services>

<!-- Portfolio Section -->

  <portfolio></portfolio>

<!-- clients section -->

  <clients></clients>

<!-- marcas section -->

  <brands></brands>


<!-- banners section -->

  <banners></banners>

<!-- contact section -->

  <contact></contact>



<!-- Contact Section -->
<div id="footer">
  <div class="container">
    <p>Copyright &copy; Zeis Producciones</p>
  </div>
</div>



@endsection