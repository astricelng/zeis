<template>
	<div id="services" class="text-center">
	  <div class="container">
	    <div class="section-title center">
	      <h2><span>{{ trans('home.services.title') }}</span></h2>
	      <hr class="decoration">
	    </div>
	    <div class="space"></div>
	    <div class="row">
	      <div class="col-md-4 col-sm-12 serv1">
	        <div class="service"> <i><img :src="url + 'assets/www/images/backline_icon.png'"></i>
	          <h3><span>{{ trans('home.services.s1.title') }}</span></h3>
	          <p>{{ trans('home.services.s1.text') }}</p>
	        </div>
	      </div>
	      <div class="col-md-4 col-sm-12 serv2">
	        <div class="service"> <i><img :src="url + 'assets/www/images/set_icon.png'"></i>
	          <h3><span>{{ trans('home.services.s2.title') }}</span></h3>
	          <p>{{ trans('home.services.s2.text') }}</p>
	        </div>
	      </div>
	      <div class="col-md-4 col-sm-12 serv3">
	        <div class="service"> <i><img :src="url + 'assets/www/images/sobretarima_icon.png'"></i>
	          <h3><span>{{ trans('home.services.s3.title') }}</span></h3>
	          <p>{{ trans('home.services.s3.text') }}</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</template>

<script>

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

            const controller = new ScrollMagic.Controller();
            let $services 	= $('#services');
            let $serv1 		= $('.serv1');
            let $serv2 		= $('.serv2');
            let $serv3 		= $('.serv3');
            

            this.$servicesTitle        	= $services.find('.section-title span');
            this.$servicesDecoration   	= $services.find('.decoration');
            
            this.$serv1Img        		= $serv1.find('.service');
            this.$serv1Title        	= $serv1.find('h3 span');
            this.$serv1Text	        	= $serv1.find('p');

            this.$serv2Img        		= $serv2.find('.service');
            this.$serv2Title        	= $serv2.find('h3 span');
            this.$serv2Text	        	= $serv2.find('p');

            this.$serv3Img        		= $serv3.find('.service');
            this.$serv3Title        	= $serv3.find('h3 span');
            this.$serv3Text	        	= $serv3.find('p');


            this.$servicesTitle.html( this.$servicesTitle.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
            this.$serv1Title.html( this.$serv1Title.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
            this.$serv2Title.html( this.$serv2Title.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
            this.$serv3Title.html( this.$serv3Title.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));

            this.contentT1
            .staggerFromTo(this.$servicesTitle.find("span"),
                0.5, 
                {autoAlpha:0, rotationX:-90, top:"-30px"}, 
                {autoAlpha:1, rotationX:0, top:"0px"}, 
                0.07
            )
            .fromTo(this.$servicesDecoration, 0.2,
                {width: 0, autoAlpha: 0},
                {width: "70px", autoAlpha: 1, ease: Power0.easeInOut, delay: .1}
            )
            .fromTo(this.$serv1Img, 0.4,
                {y: 20, scale: 1.2, autoAlpha: 0},
                {y: 0, scale: 1, autoAlpha: 1, ease:Power0.easeNone}
            )
            .staggerFromTo(this.$serv1Title.find("span"),
                0.5, 
                {autoAlpha:0, rotationX:-90, top:"-30px"}, 
                {autoAlpha:1, rotationX:0, top:"0px"}, 
                0.07, "-=0.2"
            )
            .fromTo(this.$serv1Text, 0.7,
                {autoAlpha: "0"},
                {autoAlpha: "1", ease: Circ.easeInOut}, "-=0.3"
            )
            .fromTo(this.$serv2Img, 0.4,
                {y: 20, scale: 1.2, autoAlpha: 0},
                {y: 0, scale: 1, autoAlpha: 1, ease:Power0.easeNone}
            )
            .staggerFromTo(this.$serv2Title.find("span"),
                0.5, 
                {autoAlpha:0, rotationX:-90, top:"-30px"}, 
                {autoAlpha:1, rotationX:0, top:"0px"}, 
                0.07, "-=0.2"
            )
            .fromTo(this.$serv2Text, 0.7,
                {autoAlpha: "0"},
                {autoAlpha: "1", ease: Circ.easeInOut}, "-=0.3"
            )
            .fromTo(this.$serv3Img, 0.4,
                {y: 20, scale: 1.2, autoAlpha: 0},
                {y: 0, scale: 1, autoAlpha: 1, ease:Power0.easeNone}
            )
            .staggerFromTo(this.$serv3Title.find("span"),
                0.5, 
                {autoAlpha:0, rotationX:-90, top:"-30px"}, 
                {autoAlpha:1, rotationX:0, top:"0px"}, 
                0.07, "-=0.2"
            )
            .fromTo(this.$serv3Text, 0.7,
                {autoAlpha: "0"},
                {autoAlpha: "1", ease: Circ.easeInOut}, "-=0.3"
            );


            let scene = new ScrollMagic.Scene({
                triggerElement: '#services',
                triggerHook: 0.8
            })
            .setTween(this.contentT1)
            .addTo(controller);

        }

    }
</script>