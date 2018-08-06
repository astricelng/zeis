<template>
    <div id="clients" class="text-center" :style="{backgroundImage: 'url(' + url + 'assets/www/images/client_bg.jpg' + ')' }">
      <div class="container container-clients">
        <div class="section-title center">
          <h2><span>{{ trans('home.clients.title') }}</span></h2>
          <hr class="decoration">
        </div>

        <div class="clients_list">
          <div class="first_row">
            <div class="left_column">
              <h3>{{ trans('home.clients.title_company') }}</h3>
                <ul>
                  <li>Ocesa</li>
                  <li>Westwood Entertainment</li>
                  <li>Bunker Producciones</li>
                  <li>ShowBox</li>
                  <li>Equipos Apolo</li>
                  <li>Meridian Pro</li>
                  <li>Grupo Zignia</li>
                </ul>

            </div>
            <div class="right_column">
              <h3>{{ trans('home.clients.title_festival') }}</h3>
              <ul>
                <li>Vive Latino</li>
                <li>Corona Capital</li>
                <li>Hell and Heaven</li>
                <li>Force Fest</li>
                <li>Bahidora</li>
                <li>Jrz Fest</li>
                <li>Cumbre Tajín</li>
              </ul>
            </div>
          </div>

          <div class="second_row">
            <h3>{{ trans('home.clients.title_artist') }}</h3>
            <b>Zoe</b> - Panteón Rococo - La Maldita Vecindad- <b>Iggy Pop</b> - Moderatto  - Gloria Trevi - Lila Downs - Caifanes - Rock en tu Idioma - <b>Pixies</b> - Steve Aoki - The Libertines - The Horrors - <b>David Gheta</b> - Paul Van Dyk - Fobia - Reik - Camila - <b>The Doors</b> - Aleks Syntek - Alejandra Guzmán - Liza Minnelli - Armin Van Buuren - <b>Alan Parsons</b> - Fito Paez - Paul Okenfold - <b>Fabulosos Cadillacs</b> - La Oreja de Van Gogh - Rafael - <b>Calle 13</b> - Icon - Jarabe de Palo - Gojira - <b>Mastodon</b> - OMD - Residente - CNCO - Il Divo - <b>Carlos Vives</b> - Kansas - Dua Lipa - <b>Molotov</b>
          </div>

        </div>
      </div>
    </div>
</template>

<script>

import 'slick-carousel';

    export default {

        data() {
            return {
                url: window.i18n.endpoints.url,
                contentT1: new TimelineMax(),
            };
        },
        methods: {
           
        },
        mounted: function(){

          let $clients = $('#clients');
          const controller = new ScrollMagic.Controller();

          this.$clientsTitle        = $clients.find('.section-title span');
          this.$clientsDecoration   = $clients.find('.decoration');
          this.$clientsLeftList     = $clients.find('.left_column');
          this.$clientsRightList    = $clients.find('.right_column');
          this.$clientsDownList     = $clients.find('.second_row');


          this.$clientsTitle.html( this.$clientsTitle.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));

          this.contentT1
          .staggerFromTo(this.$clientsTitle.find("span"),
              0.5, 
              {autoAlpha:0, rotationX:-90, top:"-30px"}, 
              {autoAlpha:1, rotationX:0, top:"0px"}, 
              0.1
          )
          .fromTo(this.$clientsDecoration, 0.3,
              {width: 0, autoAlpha: 0},
              {width: "70px", autoAlpha: 1, ease: Power0.easeInOut, delay: .1}
          )
          .fromTo(this.$clientsLeftList, 0.3,
              {y: 20, scale: 1.5, autoAlpha: 0},
              {y: 0, scale: 1, autoAlpha: 1, ease:Power0.easeNone}, "+=0.1"
          )
          .fromTo(this.$clientsRightList, 0.3,
              {y: 20, scale: 1.5, autoAlpha: 0},
              {y: 0, scale: 1, autoAlpha: 1, ease:Power0.easeNone}, "+=0.1"
          )
          .fromTo(this.$clientsDownList, 0.3,
              {y: 20, scale: 1.5, autoAlpha: 0},
              {y: 0, scale: 1, autoAlpha: 1, ease:Power0.easeNone}, "+=0.1"
          )


          let scene = new ScrollMagic.Scene({
              triggerElement: '#clients',
              triggerHook: 0.8
          })
          .setTween(this.contentT1)
          .addTo(controller);

        }
       

    }
</script>