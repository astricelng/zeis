<template>
    <div id="marcas" class="text-center">
      <div class="container container-brands">
        <div class="section-title center">
          <h2><span>{{ trans('home.brands.title') }}</span></h2>
          <hr class="decoration">
        </div>

        <div class="logo-brands">
            <div class="responsive">
                <img :src="url + 'assets/www/images/brands/aguilar.png'">
                <img :src="url + 'assets/www/images/brands/allenheath.png'">
                <img :src="url + 'assets/www/images/brands/ampeg.png'">
                <img :src="url + 'assets/www/images/brands/ashdown.png'">
                <img :src="url + 'assets/www/images/brands/dw.png'">
                <img :src="url + 'assets/www/images/brands/fender.png'">
                <img :src="url + 'assets/www/images/brands/gallienkrueger.png'">
                <img :src="url + 'assets/www/images/brands/gibson.png'">
                <img :src="url + 'assets/www/images/brands/gretsch.png'">
                <img :src="url + 'assets/www/images/brands/korg.png'">
            </div>
            <div class="responsive">
                <img :src="url + 'assets/www/images/brands/lp.png'">
                <img :src="url + 'assets/www/images/brands/ludwig.png'">
                <img :src="url + 'assets/www/images/brands/mapex.png'">
                <img :src="url + 'assets/www/images/brands/marshall.png'">
                <img :src="url + 'assets/www/images/brands/mesaboogie.png'">
                <img :src="url + 'assets/www/images/brands/nordlogo.png'">
                <img :src="url + 'assets/www/images/brands/orange.png'">
                <img :src="url + 'assets/www/images/brands/paiste.png'">
                <img :src="url + 'assets/www/images/brands/pearl.png'">
                <img :src="url + 'assets/www/images/brands/pioneer.png'">
            </div>
            <div class="responsive">
                <img :src="url + 'assets/www/images/brands/rane.png'">
                <img :src="url + 'assets/www/images/brands/roland.png'">
                <img :src="url + 'assets/www/images/brands/sabian.png'">
                <img :src="url + 'assets/www/images/brands/swr.png'">
                <img :src="url + 'assets/www/images/brands/tama.png'">
                <img :src="url + 'assets/www/images/brands/technics.png'">
                <img :src="url + 'assets/www/images/brands/vox.png'">
                <img :src="url + 'assets/www/images/brands/yamaha.png'">
                <img :src="url + 'assets/www/images/brands/zildjian.png'">
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
        mounted: function () {

          this.$container = $('.logo-brands .responsive');

          let windowW = $(window).width();

          if (windowW <= 768)
          {
              $(window).resize(() => {
                $(".logo-brands").width($(window).width());

              });
              
              // Carrusel de imageens para los logos de compañias
              this.$container.slick({
                    dots: false,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 6,
                    slidesToScroll: 3,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    arrows: false,
                    responsive: [
                      {
                        breakpoint: 768,
                        settings: {
                          slidesToShow: 3,
                          slidesToScroll: 3
                        }
                      },
                      {
                        breakpoint: 650,
                        settings: {
                          slidesToShow: 3,
                          slidesToScroll: 3
                        }
                      },
                      {
                        breakpoint: 480,
                        settings: {
                          slidesToShow: 2,
                          slidesToScroll: 2
                        }
                      },
                      {
                        breakpoint: 320,
                        settings: {
                          slidesToShow: 2,
                          slidesToScroll: 2
                        }
                      }
                    ]
              });
              
            $(".logo-brands").width(windowW - (windowW*0.02));

          }


          let $marcas = $('#marcas');
          const controller = new ScrollMagic.Controller();

          this.$marcasTitle         = $marcas.find('.section-title span');
          this.$marcasDecoration    = $marcas.find('.decoration');
          this.$marcasLogos         = $marcas.find('.logo-brands');

          this.$marcasTitle.html( this.$marcasTitle.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));

          this.contentT1
          .staggerFromTo(this.$marcasTitle.find("span"),
              0.5, 
              {autoAlpha:0, rotationX:-90, top:"-30px"}, 
              {autoAlpha:1, rotationX:0, top:"0px"}, 
              0.07
          )
          .fromTo(this.$marcasDecoration, 0.2,
              {width: 0, autoAlpha: 0},
              {width: "70px", autoAlpha: 1, ease: Power0.easeInOut, delay: .1}
          )
          .fromTo(this.$marcasLogos, 0.3,
              {y: 20, scale: 1.1, autoAlpha: 0},
              {y: 0, scale: 1, autoAlpha: 1, ease:Power0.easeNone}, "-=0.1"
          )

          let scene = new ScrollMagic.Scene({
              triggerElement: '#marcas',
              triggerHook: 0.8
          })
          .setTween(this.contentT1)
          .addTo(controller);

        }

    }
</script>