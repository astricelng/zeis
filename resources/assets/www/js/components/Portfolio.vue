<template>
	<div id="works">
	  <div class="container"> <!-- Container -->
	    <div class="section-title text-center center">
	      <h2><span>{{ trans('home.portfolio.title') }}</span></h2>
	      <hr class="decoration">
	      <div class="clearfix"></div>
	    </div>
	    <div class="row">
	      	<div class="portfolio-items">
		      	<ul class="gallery">
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/1.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/1.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/2.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/2.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/3.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/3.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/4.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/4.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/5.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/5.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/6.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/6.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/7.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/7.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/8.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/8.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/9.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/9.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/10.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/10.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/11.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/11.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/12.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/12.jpg'">
		      			</a>
		      		</li>
		      		<li>
		      			<a :href="url + 'assets/www/images/portfolio/13.jpg'">
		      				<img :src="url + 'assets/www/images/portfolio/13.jpg'">
		      			</a>
		      		</li>
		      	</ul>
	      	</div>
	    </div>
	  </div>
	</div>
</template>

<script>

	import 'simplelightbox';

    export default {

        data() {
            return {
                url: window.i18n.endpoints.url,
                contentT1: new TimelineMax(),
            };
        },
        mounted: function(){

			$('.gallery li a').simpleLightbox({
            	close: false,
        	});


        	let $works = $('#works');
            const controller = new ScrollMagic.Controller();


            this.$worksTitle		= $works.find('.section-title span');
            this.$worksDecoration   = $works.find('.decoration');
            this.$galPictures   	= $works.find('.gallery li');


            this.$worksTitle.html( this.$worksTitle.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));

            this.contentT1
            .staggerFromTo(this.$worksTitle.find("span"),
                0.5, 
                {autoAlpha:0, rotationX:-90, top:"-30px"}, 
                {autoAlpha:1, rotationX:0, top:"0px"}, 
                0.07
            )
            .fromTo(this.$worksDecoration, 0.2,
                {width: 0, autoAlpha: 0},
                {width: "70px", autoAlpha: 1, ease: Power0.easeInOut, delay: .1}
            )

            this.$galPictures.each((index, item) =>
	        {            
	            this.contentT1
	            .fromTo(item, 0.3,
	                {y: 20, scale: 1.2, autoAlpha: 0},
	                {y: 0, scale: 1, autoAlpha: 1, ease:Power0.easeNone}
	            )

	        }); 


            let scene = new ScrollMagic.Scene({
                triggerElement: '#works',
                triggerHook: 0.8
            })
            .setTween(this.contentT1)
            .addTo(controller);

        }

    }
</script>