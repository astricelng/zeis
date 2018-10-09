<template>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
        <a class="navbar-brand page-scroll" :href="trans('endpoints.home_index')">ZEIS</a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about">+ {{ trans('home.menu.about') }}</a> </li>
          <!--li> <a class="page-scroll" href="#services">+ @lang('pages/home.menu.services')</a> </li-->
          <li> <a class="page-scroll" href="#works">+ {{ trans('home.menu.portfolio') }}</a> </li>
          <li> <a class="page-scroll" href="#clients">+ {{ trans('home.menu.clients') }}</a> </li>
          <li> <a class="page-scroll" href="#marcas">+ {{ trans('home.menu.brands') }}</a> </li>
          <!--li> <a class="page-scroll" href="#banners">+ @lang('pages/home.menu.events')</a> </li-->
          <li> <a class="page-scroll" href="#contact">+ {{ trans('home.menu.contact') }}</a> </li>
          <li> 
            <a class="page-scroll lang-switch" :class="{ orange: checkLan('en') }" :href="en" v-on:click="setLan('en')">EN</a> / 
            <a class="page-scroll lang-switch" :class="{ orange: checkLan('es') }" :href="es" v-on:click="setLan('es')">ES</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 

    </div>
    <!-- /.container --> 
  </nav>
</template>

<script>

    export default {

        props: ['es', 'en'],

         data() {
            return { 
                url: window.i18n.endpoints.url,
                orange: false,
                lng: window.i18n.endpoints.language
            }
        },

        methods: {

            setLan: function(language){
                sessionStorage.setItem("lng", language);

            },

            checkLan: function(language){

                if (sessionStorage.getItem("lng") )
                    return language == sessionStorage.getItem("lng");   

                else
                    return language == this.lng;

            }
        },

    }
</script>