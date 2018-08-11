
@extends('www.layouts.page-head')

@section('content')



<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
  <div id="status"> <img src="{{ asset('assets/www/images/preloader.gif')}}" height="64" width="64" alt=""> </div>
</div>
<!-- Navigation -->
  <topbar es="{{ route('web.lang-switch', 'es') }}" en="{{ route('web.lang-switch', 'en') }}" v-if="show && showLeft"></topbar>

<!-- Header -->
  <home @showhome="showSite"></home>
  
<!-- About Section -->

  <about v-if="show && showLeft"></about>

<!-- Services Section -->
  
  <services v-if="show && showLeft"></services>

<!-- Portfolio Section -->

  <portfolio v-if="show && showLeft"></portfolio>

<!-- clients section -->

  <clients v-if="show && showLeft"></clients>

<!-- marcas section -->

  <brands v-if="show && showLeft"></brands>

<!-- banners section -->

  <banners v-if="show && showLeft"></banners>

<!-- contact section -->

  <contact v-if="show && showLeft"></contact>

<!-- Contact Section -->
  
  <footbar v-if="show && showLeft"></footbar>


<!-- INTEGRACION -->

  <!-- About Section -->

  <abouti v-if="show && !showLeft"></abouti>

<!-- Services Section -->
  
  <servicesi v-if="show && !showLeft"></servicesi>

<!-- Portfolio Section -->

  <portfolioi v-if="show && !showLeft"></portfolioi>

<!-- clients section -->

  <clientsi v-if="show && !showLeft"></clientsi>

<!-- contact section -->

  <contacti v-if="show && !showLeft"></contacti>

<!-- Contact Section -->
  
  <footbari v-if="show && !showLeft"></footbari>



@endsection