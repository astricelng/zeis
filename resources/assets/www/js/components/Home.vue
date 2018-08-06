<!--template>
	
	<div id="intro" class="intro__back" :style="{ backgroundImage: 'url(' + url + 'assets/www/images/intro_bg.jpg' + ')' }">
	  <div class="intro-body">
	    <div class="container container_home">
	      <div class="texto_intro">
	        <img :src="url + 'assets/www/images/letras_intro_'+lng+'.png'">  
	      </div>
	      <div class="logo_intro">
	        <img :src="url + 'assets/www/images/logo_intro.png'">  
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
                lng: window.i18n.endpoints.language,
                contentT1: new TimelineMax(),
            }
        },

        methods: {

        },

        mounted () { 

            let $intro = $('#intro');
            const controller = new ScrollMagic.Controller();

            this.introTop       = $intro.find('.texto_intro');
            this.introLogo    	= $intro.find('.logo_intro');

            this.contentT1
            .fromTo(this.introLogo, 1,
                {y: 100, autoAlpha: "0"},
                {y: 0, autoAlpha: "1", ease: Circ.easeInOut}, "+=1"
            )
            .fromTo(this.introTop, 0.8,
                {autoAlpha: "0"},
                {autoAlpha: "1", ease: Circ.easeInOut }
            );

            var scene = new ScrollMagic.Scene({
                triggerElement: '#intro', 
                triggerHook: 0.1,
            })
            .setTween(this.contentT1)
            .addTo(controller);

    
        } //Close Mounted

    }
</script-->

<template>

    <div class="padre">
        <div class="area_derecha" v-on:click="setHome(1)"></div>
        <div class="area_izquierda" v-on:click="setHome(2)"></div>
        <div class="derecha">
            <div :style="{ backgroundImage: 'url(' + url + 'assets/www/images/derecha_home_comp.jpg' + ')' }"></div>
        </div>
        <div class="izquierda">
            <div :style="{ backgroundImage: 'url(' + url + 'assets/www/images/izquierda_home_comp.jpg' + ')' }"></div>
        </div>
        <div class="fondo_completo" :style="{ backgroundImage: 'url(' + url + 'assets/www/images/zeis_home.jpg' + ')' }"></div>
    </div>

</template>

<script>

    export default {

         data() {
            return { 
                url: window.i18n.endpoints.url,
                lng: window.i18n.endpoints.language,
                contentT1: new TimelineMax(),
            }
        },

        methods: {
            setHome(home) {

                this.setAreaHome(home);
            },

            setAreaHome(home) {

                let $intro = $('.padre');
                const controller = new ScrollMagic.Controller();

                this.area        = (home == 1) ? $intro.find('.izquierda div') : $intro.find('.derecha div');

                this.contentT1
                .fromTo(this.area, 1.5,
                    {autoAlpha: "0"},
                    {autoAlpha: "1", ease: RoughEase.ease.config({ template:  Power0.easeNone, strength: 0.5, points: 30, taper: "none", randomize: false, clamp: true})}
                )

            },
        },

        mounted () { 

            let $intro      = $('.padre');
            this.derecha    = $intro.find('.derecha div');
            this.izquierda  = $intro.find('.izquierda div');

            this.contentT1
            .set(this.derecha, { autoAlpha: 0 })
            .set(this.izquierda, { autoAlpha: 0 });

    
        } //Close Mounted

    }
</script>